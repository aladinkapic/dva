<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if($user->password == $request->password){
            auth()->login($user);
            return redirect('/administrator');
        }else{
            return view('login');
        }
    }

    public function bye(){
        auth()->logout();
        return redirect('/');
    }

    public function remove_user($cat_id, $type, $id){
        User::destroy($id);

        return redirect("administrator_content/".$cat_id."/".$type);
    }
}
