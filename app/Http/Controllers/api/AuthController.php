<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        // 限定show function才可使用jwt.auth中介層
        $this->middleware('jwt.auth')->only('show');
    }

    /**
     * 登入
     */
    public function auth()
    {
        $credentials = request()->only('email', 'password');
    
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['status' => 1, 'message' => 'invalid credentials'], 401);
        }
        
        return response()->json(['status' => 0, 'token' => $token]);
    }

    /**
     * 當前登入者資訊 (透過token)
     */
    public function show()
    {
        return response()->json(['status' => 0, 'user' => auth()->user()]);
    }
}
