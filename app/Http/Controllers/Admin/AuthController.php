<?php

namespace Dca\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dca\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function home()
    {
        return view('admin.dashboard');
    }
}
