<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'admin' => '1'])) {
                return redirect('admin/dashboard');
            } else {
                return redirect('/admin')->with('flash_message_error', 'Invalid Username or Password');
            }
        }

        return view('admin.adminsign');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}