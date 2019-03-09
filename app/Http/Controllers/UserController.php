<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;

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
            return redirect('/views_per_month/'.(int)date('m').'/'.date('y'));
        }else{
            $categories = Category::all();

            return view('login', compact('categories'));
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
