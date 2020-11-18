<?php

namespace Dca\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dca\Http\Controllers\Controller;
use Dca\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check() === true) {
            return redirect()->route('admin.home');
        }

        return view('admin.login');
    }

    public function home()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message
                ->error('Ooops, informe todos os dados válidos para efetuar o login')
                ->render();

            return response()->json($json);
        }

        // if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
        //     return "envie todos os dados valido";
        // }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            $json['message'] = $this->message
                ->error('Ooops, Usuário e senha não conferem')
                ->render();

            return response()->json($json);
        }

        $this->authenticated($request->getClientIp());

        $json['redirect'] = route('admin.home');

        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }
}
