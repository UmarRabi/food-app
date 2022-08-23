<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminder;
use App\Models\Appointments;
use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Models\Files;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //

    public function upload(){
        return view('upload');
    }

    public function profile(){
        return view('profile');
    }

    public function appointment(){
        return view('book-appointment');
    }

    public function savefile(Request $request){
        $uploadedFile = $request->file('upload');
        $file=new Files();
        $identifier=uniqid();
        $file->name=$identifier;
        $file->original_name=$uploadedFile->getClientOriginalName();
        $file->user()->associate(auth::user());
        $file->save();
        $uploadedFile->storeAs('uploads', $identifier.'.'.$uploadedFile->getClientOriginalExtension(), 'public');
        return back()->with('message', 'File uploaded successfully');
    }

    public function savecontact(Request $request){
        $contact=new Contacts($request->all());
        $contact->user()->associate(Auth::user());
        $contact->save();
        return back()->with('message', 'Contact created successfully');
    }

    public function contacts(){
        return view('contact');
    }

    public function saveappointment(Request $request){
        $appointment=new Appointments($request->all());
        $appointment->user()->associate(Auth::user());
        $appointment->save();
        $schedule=new Schedule();
        $reminder=$request->reminder;

        $dateTime = date($reminder);
       // return $dateTime;
        $reminder =  Carbon::create($dateTime)->format('m-d-Y H:i:s');
      //  return $reminder;
        // $reminder=Carbon::date('Y-m-d H:i:S',$request->reminder);
       $schedule->job(new SendReminder())->monthlyOn($reminder);
       return "cool";
    }

    public function reminder(){

    }
}
