<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Admin;
use App\UsersDetail;
use App\Hobby;
use App\Country;
use App\Language;
use App\Occupation;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Response;

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
                Session::put('frontSession', $data['email']);
                return redirect('/phase/2');
                // echo 'success';
                die;
            } else {
                // echo 'failed';
                // die;
                return redirect::back()->with('flash_message_error', 'Invalid Username or Password');
            }
        }
    }

    public function phase2(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $userDetail = new UsersDetail;
            $userDetail->user_id = Auth::User()['id'];
            $userDetail->dob = $data['dob'];
            $userDetail->gender = $data['gender'];
            $userDetail->height = $data['height'];
            $userDetail->marital_status = $data['marital_status'];
            $userDetail->save();
        }

        $countries = Country::get();

        $languages = Language::orderBy('name', 'ASC')->get();
        $occupations = Occupation::orderBy('title', 'ASC')->get();

        $hobbies = Hobby::orderBy('title', 'ASC')->get();
        return view('users.phase2')->with(compact('countries', 'languages', 'hobbies', 'occupations'));
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('frontsession');
        Session::forget('current_url');
        return redirect()->action('FrontController@front');
    }
}