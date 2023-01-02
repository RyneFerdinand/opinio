<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function getHomeUsers()
    {
        $users = User::with('articles')->get()->sortBy(function ($user) {
            return $user->articles->count();
        })->reverse()->sortBy('name')->take(5);

        return $users;
    }

    public function showLogin()
    {
        $articles = Article::all();
        $articlesCount = count(Article::all());
        return view('login', compact('articles', 'articlesCount'));
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $messages = ([
            'email.required' => 'You need to fill your email!',
            'password.required' => 'You need to fill your password!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        }
        return back()->withErrors(['error' => 'You filled in wrong email or password']);
    }

    public function showRegister()
    {
        $articles = Article::all();
        $articlesCount = count(Article::all());

        return view('register', compact('articles', 'articlesCount'));
    }

    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|alpha_num'
        ];

        $messages = ([
            'name.required' => 'You need to fill your name!',
            'email.required' => 'You need to fill your email!',
            'password.required' => 'You need to fill your password!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->coverPicture = "https://randomuser.me/api/portraits/lego/0.jpg";
        $user->profilePicture = "https://picsum.photos/id/200/1080/720";

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }

    public function profile($id)
    {
        $user = User::find($id);
        $articles = $user->articles()->paginate(9);

        $articlesCount = count(Article::all());
        return view('profile-page', compact('articles', 'user', 'articlesCount'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function search($query)
    {
        $users = User::where('name', 'LIKE', "%$query%")->get();

        return $users;
    }

    public function edit()
    {
        $user = Auth::user();
        $articlesCount = count(Article::all());

        return view('profile-edit', compact('user', 'articlesCount'));
    }

    public function updateCover(Request $request, User $user)
    {
        $rules = ([
            'coverPicture' => 'required|mimes:jpeg,jpg,png',
        ]);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back();
        }

        if (File::exists(public_path($user->coverPicture))) {
            File::delete(public_path($user->coverPicture));
        }

        $ext = $request->file('coverPicture')->extension();
        $coverPictureExtension = time() . '.' . $ext;

        Storage::putFileAs('/public/images/user/cover/', $request->coverPicture, $coverPictureExtension);
        $user->coverPicture = '/storage/images/user/cover/' . $coverPictureExtension;

        $user->save();

        return redirect()->back();
    }

    public function updateProfile(Request $request, User $user)
    {
        $rules = ([
            'profilePicture' => 'required|mimes:jpeg,jpg,png',
        ]);

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back();
        }

        if (File::exists(public_path($user->profilePicture))) {
            File::delete(public_path($user->profilePicture));
        }

        $ext = $request->file('profilePicture')->extension();
        $profilePictureExtension = time() . '.' . $ext;

        Storage::putFileAs('/public/images/user/profile/', $request->profilePicture, $profilePictureExtension);
        $user->profilePicture = '/storage/images/user/profile/' . $profilePictureExtension;

        $user->save();

        return redirect()->back();
    }

    public function updatePersonal(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
        ];

        $messages = ([
            'email.required' => 'You need to fill your email!',
            'name.required' => 'You need to fill your name!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('editSection', 'authentication');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->save();

        return redirect("/user/$user->id");
    }

    public function updateAuthentication(Request $request, User $user)
    {
        $rules = [
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
        ];

        $messages = ([
            'password.required' => 'You need to fill your password!',
            'confirmPassword.required' => 'You need to fill your confirm password!',
            'confirmPassword.same' => 'The confirm password field is incorrect!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('editSection', 'authentication');
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect("/user/$user->id");
    }
}
