<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminder;
use App\Models\Appointments;
use App\Models\Carts;
use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Models\Files;
use App\Models\Foods;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function upload()
    {
        return view('upload');
    }

    public function profile()
    {
        return view('profile');
    }

    public function appointment()
    {
        return view('book-appointment');
    }

    public function savefile(Request $request)
    {
        $uploadedFile = $request->file('upload');
        $file = new Files();
        $identifier = uniqid();
        $file->name = $identifier;
        $file->original_name = $uploadedFile->getClientOriginalName();
        $file->user()->associate(auth::user());
        $file->save();
        $uploadedFile->storeAs('uploads', $identifier . '.' . $uploadedFile->getClientOriginalExtension(), 'public');
        return view('thanks')->with('message', 'File uploaded successfully');
    }

    public function savecontact(Request $request)
    {
        $contact = new Contacts($request->all());
        $contact->user()->associate(Auth::user());
        $contact->save();
        return view('thanks')->with('message', 'Contacts saved successfully');
        //  return back()->with('message', 'Contact created successfully');
    }

    public function viewcontacts()
    {
        $contacts = Contacts::where('user_id', Auth::user()->id)->get();
        return view('contacts')->with('contacts', $contacts);
    }

    public function contacts()
    {
        return view('contact');
    }

    public function viewappointment()
    {
        $appointments = Appointments::where('user_id', Auth::user()->id)->get();
        return view('appointments')->with('appointments', $appointments);
    }

    public function saveappointment(Request $request)
    {
        $appointment = new Appointments($request->all());
        $appointment->user()->associate(Auth::user());
        $appointment->save();
        $schedule = new Schedule();
        $reminder = $request->reminder;

        $dateTime = date($reminder);
        // return $dateTime;
        $reminder =  Carbon::create($dateTime)->format('m-d-Y H:i:s');
        //  return $reminder;
        // $reminder=Carbon::date('Y-m-d H:i:S',$request->reminder);
        $schedule->job(new SendReminder())->monthlyOn($reminder);
        return view('thanks')->with('message', "Your appointment have been booked successfully");
    }

    public function reminder()
    {
    }

    public function files()
    {
        $files = Files::where('user_id', Auth::user()->id)->get();
        return view('files')->with('files', $files);
    }

    public function foods(Request $request)
    {
        if (Auth::user()->type == 1) {
            $foods = Foods::get();
            return view('kichen.foods')
                ->with('foods', $foods);
        }
        $foods = "";
        if ($request->query('meal') != null) {
            $foods = Foods::where('meal', $request->query('meal'))->get();
        } else {
            $foods = Foods::get();
        }

        return view('foods', compact('foods'));
    }

    public function file($id)
    {
        return view('file-upload');
    }

    public function cart($id)
    {
        $cart = Carts::where('food_id', $id)->where('user_id', Auth::user()->id)->where('status', false)->first() ?? new Carts();
        $cart->food_id = $id;
        $cart->user_id = Auth::user()->id;
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        return redirect()->back()->with('message', 'Added to cart successfully');
    }

    public function carts()
    {
        $carts = Carts::with('food')->where('user_id', Auth::user()->id)->where('status', false)->get();
        return view('my-carts', compact('carts'));
    }

    public function checkout()
    {
        $carts = Carts::with('food')->where('user_id', Auth::user()->id)->where('status', false)->get();
        return view('checkout', compact('carts'));
    }

    public function kitchen()
    {

        $userCount = User::where('type', '0')->count();
        $orderCount = Carts::count();
 
        return view('kichen.dashboard', compact('userCount', 'orderCount'));
        // return view('kichen.index');
    }

    public function kitchenMenu()
    {
        $foods = Foods::get();
        // return view('kichen.foods')
        //     ->with('foods', $foods);
        return view('kichen.food_menus', compact('foods'));
        // return view('kichen.index');
    }

    public function users()
    {
        $users = User::get();
        // return view('kichen.foods')
        //     ->with('foods', $foods);
        return view('kichen.users', compact('users'));
        // return view('kichen.index');
    }
}
