<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddMessageRequest;
use App\Mail\UserEmailContact;
use App\Models\Message;
use Mail;

class MessageController extends Controller
{
    public function sendMessage(AddMessageRequest $request)
    {
      $send = Message::create($request->all());
      Mail::to('hichamnasselahsen@gmail.com')->send(new UserEmailContact($send));
      return redirect('/#contactUs')->with('success', 'Your message has been successfully sent !');
    }
}
