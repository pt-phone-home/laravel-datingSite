<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

class UsersController extends Controller
{
    public function signup(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();
            // dd($data);
            $this->validate($request, [
                'g-recaptcha-response' => 'required|captcha',
            ]);
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->save();

            if (Auth::attempt(['name' => $data['name'], 'password' => $data['password'], 'admin' => '0'])) {
                Session::put('frontSession', $data['name']);
                return redirect('/phase/2');
            };
        }

        return view('users.register');
    }

    public function checkUsername(Request $request)
    {
        $data = $request->all();
        $usersCount = User::where('name', $data['name'])->count();

        if ($usersCount > 0) {
            echo 'false';
        } else {
            echo 'true';
        }
    }

    public function checkEmail(Request $request)
    {
        $data = $request->all();
        $usersCount = User::where('email', $data['email'])->count();

        if ($usersCount > 0) {
            echo 'false';
        } else {
            echo 'true';
        }
    }

    public function signin(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            // echo '<pre>';
            // print_r($data);
            // die;

            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => null])) {
                echo 'success';
                die;
            } else {
                echo 'failed';
                die;
            }
        }
    }
}