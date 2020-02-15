<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserProfileController extends MainController
{
    function index(){
        return view('user.index');
    }
    public function update($id)
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        $user = User::findOrfail($id);


        $user->update($data);
        toast('Profile successfully updated!', 'success');
        return redirect('dashboard/profile');
    }
    public function UpdatePassword($id)
    {
        $data = request()->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::findOrfail($id);
        $user->update($data);
        toast('Profile successfully updated!', 'success');
        return redirect('dashboard/profile');
    }
}
