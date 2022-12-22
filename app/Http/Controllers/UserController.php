<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function getHomeUsers(){
        $users = User::with('articles')->get()->sortBy(function ($user){
            return $user->articles->count();
        })->reverse()->sortBy('name')->take(5);

        return $users;
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $messages = ([
            'email.required' => 'You need to fill your email!',
            'password.required' => 'You need to fill your password!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/');
        }
        return back()->withErrors(['error' => 'You filled in wrong email or password']);
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];

        $messages = ([
            'name.required' => 'You need to fill your name!',
            'email.required' => 'You need to fill your email!',
            'password.required' => 'You need to fill your password!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/');
    }

    public function profile($id){
        $user = User::find($id);
        $articles = $user->articles()->paginate(9);

        return view('profile-page', compact('articles', 'user'));
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function search($query){
        $users = User::where('name', 'LIKE', "%$query%")->get();

        return $users;
    }
}
