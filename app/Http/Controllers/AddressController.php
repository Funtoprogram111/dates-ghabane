<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressFormRequest;
use App\Mail\UserEmailInfo;
use App\Mail\UserInfoShipping;
use App\Models\Address;
use App\Models\Order;
use Auth;
use Session;
use Mail;


class AddressController extends Controller
{
    public function store(AddressFormRequest $request)
    {
      $user = Auth::user();
      $info = Auth::user()->addresses()->create($request->all());
      Order::createOrder();
      Mail::to($user->email)->send(new UserEmailInfo($user));
      Mail::to("hichamnasselahsen@gmail.com")->send(new UserInfoShipping($info));
      Session::flash('success', "Your shipping information have been submited successfully !");
      Session::flash('createOrder', "and your order have been saved successfully !");
      Session::flash('notification', "please check your email - we have sent a confirmation message!");
      return redirect()->back();
    }
}
