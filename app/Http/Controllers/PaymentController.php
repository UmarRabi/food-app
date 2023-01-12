<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
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
            'email' => $user->email,
            'amount' => $total * 100,
            'callback_url' => 'http://localhost:8000/users/process',
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
        return view('transaction-details', compact('transaction'));
    }
}
