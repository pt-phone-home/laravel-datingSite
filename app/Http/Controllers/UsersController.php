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

            if (Auth::attempt(['email' => $data['name'], 'password' => $data['password'], 'admin' => null])) {
                Session::put('frontSession', $data['email']);
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

        $userFormCount = UsersDetail::where(['user_id' => Auth::user()['id'], 'status' => 0])->count();

        if ($userFormCount > 0) {
            return redirect('/inreview');
        }

        if ($request->isMethod('POST')) {
            $data = $request->all();
            // echo "<pre>";
            // print_r($data);
            // die;
            if (empty($data['user_id'])) {
                $userDetail = new UsersDetail;
                $userDetail->user_id = Auth::User()['id'];
            } else {
                $userDetail = UsersDetail::where('user_id', $data['user_id'])->first();
                $userDetail->status = 0;
            }
            $userDetail = new UsersDetail;
            $userDetail->user_id = Auth::User()['id'];
            $userDetail->dob = $data['dob'];
            $userDetail->gender = $data['gender'];
            $userDetail->height = $data['height'];
            $userDetail->marital_status = $data['marital_status'];
            // $userDetail->save();

            if (empty($data['body_type'])) {
                $data['body_type'] = '';
            }

            if (empty($data['city'])) {
                $data['city'] = '';
            }

            if (empty($data['state'])) {
                $data['state'] = '';
            }
            if (empty($data['country'])) {
                $data['country'] = '';
            }
            if (empty($data['education'])) {
                $data['education'] = '';
            }
            if (empty($data['occupation'])) {
                $data['occupation'] = '';
            }
            if (empty($data['income'])) {
                $data['income'] = '';
            }
            if (empty($data['complexion'])) {
                $data['complexion'] = '';
            }

            $userDetail->body_type = $data['body_type'];
            $userDetail->complexion = $data['complexion'];
            $userDetail->city = $data['city'];
            $userDetail->state = $data['state'];
            $userDetail->country = $data['country'];
            $userDetail->languages = $data['languages'];
            $userDetail->education = $data['education'];
            $userDetail->occupation = $data['occupation'];
            $userDetail->income = $data['income'];
            $userDetail->about_myself = $data['about_myself'];
            $userDetail->about_partner = $data['about_partner'];

            $hobbies = '';
            if (empty($hobbies)) {
                foreach ($data['hobbies'] as $hobby) {
                    $hobbies .= $hobby . ', ';
                }
            }

            $userDetail->hobbies = $hobbies;

            $languages = '';
            if (empty($languages)) {
                foreach ($data['languages'] as $language) {
                    $languages .= $language . ', ';
                }
            }

            $userDetail->languages = $languages;
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

    public function inreview()
    {
        return view('users.inreview');
    }

    public function viewusers()
    {
        $users = User::with('details')->get();

        $users = json_decode(json_encode($users), true);

        // echo "<pre>";
        // print_r($users);
        // die;

        return view('admin.users.view_users')->with('users', $users);
    }

    public function updateUserStatus(Request $request)
    {
        $data = $request->all();
        UsersDetail::where('user_id', $data['user_id'])->update(['status' => $data['status']]);
    }
}