<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $this->validateLogin($request);

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'token' => $request->user()->createToken($request->email)->plainTextToken,
                'message' => 'Usuario logeado exitosamente'
            ]);
        }

        return response()->json([
            'message' => 'Contraseña erronea'
        ], 401);
    }

    public function validateLogin (Request $request) {
        return $request->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);
    }
}
