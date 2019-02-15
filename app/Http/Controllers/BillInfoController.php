<?php

namespace App\Http\Controllers;

use \DateTime;
use Illuminate\Http\Request;
use App\Http\Requests\BillInfoRequest;
use Illuminate\Support\Facades\Auth;

class BillInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bill_info_create()
    {
        $owner_type_id = \App\models\UserType::where('name','Restaurant owner')->first()->id;
        $owner_id = \App\models\Restaurant_owner::where('u_id',Auth::user()->id);
        $owner_bill_info = \App\models\Bill_info::where('owner_id',$owner_id)->first();
        if(Auth::user()->user_type_id != $owner_type_id && $owner_bill_info)
            return redirect("\\");
        return view('forms.payment_form');

    }

    public function bill_info_store(BillInfoRequest $request)
    {
        $request->validated();

        
        $date = DateTime::createFromFormat('m-Y', $request->expmonth.'-'.$request->expyear);
        $owner_id = \App\models\Restaurant_owner::where('u_id',Auth::user()->id)->first()->id;

        // dd($owner_id);
        $bill = new \App\models\Bill_info;
        $bill->first_name = $request->firstname;
        $bill->last_name = $request->lastname;
        $bill->card_number = $request->cardnumber;
        $bill->expire_date = $date->format('Y-m-d H:i:s');
        $bill->cvv = $request->cvv;
        $bill->street_address = $request->address;
        $bill->city = $request->city;
        $bill->state_region = $request->state;
        $bill->postal_code = $request->zip;
        $bill->owner_id = $owner_id;
        $bill->save();

        return redirect()->route('res-register');
    }
}
