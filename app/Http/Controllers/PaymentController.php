<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Foods;
use App\Models\TransactionCarts;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    //
    public function initialize()
    {
        $user = Auth::user();
        $total = 0;
        $carts = Carts::with('food')->where('user_id', $user->id)->where('status', false)->get();
        foreach ($carts as $cart) {
            $total = $total + $cart->food->price * $cart->quantity;
        }
        $initiate =  Http::asJson()->withHeaders([
            'Authorization' => 'Bearer sk_test_ce28cce13c523f324fa3ecf7ee5fae6bae821f6f',
            'content-Type' => 'application/json'
        ])->post('https://api.paystack.co/transaction/initialize', [
            'email' => 'tipson664@gmail.com',
            'amount' => $total * 100,
            'callback_url' => url('/users/process'),
            'key' => 'sk_test_ce28cce13c523f324fa3ecf7ee5fae6bae821f6f',
            'reference' => uniqid(),
        ]);
        //return $initiate;
        if ($initiate['status']) {
            $transaction = new Transactions();
            $transaction->total = $total;
            $transaction->user_id = $user->id;
            $transaction->description = 'food purchase';
            $transaction->reference =
                $initiate['data']['reference'];
            $transaction->order_type = session('orderType');
            $transaction->save();
            return redirect($initiate['data']['authorization_url']);
        }
        return $initiate;
    }

    public function process(Request $request)
    {
        $user = Auth::user();
        //  return $user;
        $carts = Carts::where('user_id', $user->id)->where('status', false)->get();

        $url = 'https://api.paystack.co/transaction/verify/' . $request->reference;
        $response = Http::withHeaders([
            'Authorization' => 'Bearer sk_test_ce28cce13c523f324fa3ecf7ee5fae6bae821f6f',
            'content-Type' => 'application/json'
        ])->get($url);
        if ($response['status']) {
            $transaction = Transactions::where('reference', $request->reference)->where('status', 'initiated')->first();
            if ($transaction) {
                foreach ($carts as $cart) {
                    $transactionCart = new TransactionCarts();
                    $transactionCart->cart_id = $cart->id;
                    $transactionCart->transaction_id = $transaction->id;
                    $transactionCart->save();
                    $cart->status = true;
                    $cart->save();
                }
                $transaction->status = 'completed';
                $transaction->save();

                $carts = Carts::where('user_id', Auth::user()->id)->where('status', false)->delete();

                return view('thanks')->with('message', 'Transaction was successfully');
            } else {
                return view('thanks')->with('message', 'invalid details or transaction already completed');
            }
        }
    }

    public function transactions()
    {
        $user = Auth::user();
        $transactions = Transactions::where('user_id', $user->id)->get();
        return view('transactions', compact('transactions'));
    }

    public function transaction($id)
    {
        $user = Auth::user();
        $transaction = Transactions::with('transactionCarts', 'transactionCarts.cart')->where('id', $id)->first();
        return view('kichen.order_details', compact('transaction'));
    }

    public function kitchenOrders()
    {
        $orders =  TransactionCarts::with(['cart.food', 'transaction'])
            ->whereHas('transaction', function ($query) {
                $query->where('status', '=', 'completed')
                    ->where('delivery_status', '!=', 'processed');
            })
            ->get();
            $allOrders = TransactionCarts::with(['cart.food', 'transaction'])
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        $processed =  TransactionCarts::with(['cart.food', 'transaction'])
            ->whereHas('transaction', function ($query) {
                $query->where('status', '=', 'completed')
                    ->where('delivery_status', '=', 'processed');
            })
            ->get();
        return view('kichen.orders.index')
            ->with('orders', $orders)
            ->with('processed', $processed)
            ->with('allOrders', $allOrders);
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Transactions::where("id", $id)->first();
        $order->delivery_status = $request->delivery_status;
        $order->save();
        return redirect()->back()->withSuccess("Order updated successfully");
    }

    public function foodSave(Request $request)
    {
        $fileName = "";
        // return $request;
        if ($request->hasFile('image')) {
            $fileWithExtension = $request->file('image')->getClientOriginalName(); //Filename with extension
            $myFileName = pathinfo($fileWithExtension, PATHINFO_FILENAME); //extract only the filename without extension
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $myFileName . '_' . time() . '.' . $extension; //filename


            $type = $request->image->getClientMimeType();
            $size = $request->image->getSize();

            $request->image->move(public_path('images'), $fileName);

            // $uploadPath = 'public/images';
            // $path = $request->file('image')->storePubliclyAs($uploadPath, $fileName);
        }
        $food = $request->id ?  Foods::where('id', $request->id)->first() : new Foods();
        $food->name = $request->name;
        $food->meal = $request->meals;
        $food->price = $request->price;
        $food->image = "images/" . $fileName;
        $food->stocked = $request->stocked;
        $food->save();
        return redirect()->route('kitchen.menu');
    }

    public function foodForm()
    {
        $food = null;
        return view('kichen.food-form')
            ->with('food', $food);
    }

    public function foodEdit($id)
    {
        $food = Foods::where('id', $id)->first();
        return view('kichen.food-form')
            ->with('food', $food);
    }

    public function restaurants()
    {
        return view('kichen.restaurants.index')
            ->with('users', []);
    }
}
