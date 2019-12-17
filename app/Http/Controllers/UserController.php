<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileRequest;
use Auth;
use Image;
use App\Models\User;

class UserController extends Controller
{
    public function edit(User $user)
    {
      $user = Auth::user();
      return view('frontend.profile', compact('user'));
    }

    public function update(UserProfileRequest $request, User $user)
    {

      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/' . $filename ));
        $user = Auth::user();
        $user->avatar = $filename;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
      }
      return back()->with('status', 'Your profile have been updated successfully !');
    }
}
