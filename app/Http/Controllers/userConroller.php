<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userConroller extends Controller
{
    //
    public function register(Request $request) {
        
        echo $request;
        echo '<h1>'.$request->name.'</h1>';
        // echo User::all();
        echo User::where('name','hoda')->get();
        $lesInputs = $request->validate([
            'name' => ['required',"max:255","min:2"],
            'email' => ['required',"max:255","min:2",Rule::unique('users','email')],
            'password' => ["max:255","min:2",'required']
        ]);
        $user = User::create($lesInputs);
        auth()->login($user);

        return redirect()->back();



    }

    public function login(Request $request) {
        echo $request;
        echo '<h1>'.$request->name.'</h1>';
        // echo User::all();
        echo User::where('name','hoda')->get();
        $lesInputs = $request->validate([
            
            'email_login' => ['required',"max:255","min:2"],
            'password_login' => ['required',"max:255","min:2"]
        ]);
        $retAuth = auth()->attempt([
            'email' => $lesInputs['email_login'],
            'password' => $lesInputs['password_login']
        ]);
        echo '<h1>authenticado</h1>';
        return redirect('/')->with('success',$retAuth);
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/');
    }


}
