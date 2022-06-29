<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'level' => 'user',
        ];

        User::create($data);

        return response()->json([
            'status' => 200,
            'pesan' => 'berhasil membuat akun',
            'data' => $data
        ]);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json([
                'status' => 400,
                'pesan' => 'login gagal',
                'data' => ''
            ]);
        }

        $isValidPassword = Hash::check($password, $user->password);
        if (!$isValidPassword) {
            return response()->json([
                'status' => 400,
                'pesan' => 'login gagal',
                'data' => ''
            ]);
        }

        $token = Str::random(32);
        $user->update([
            'api_token' => $token
        ]);

        return response()->json([
            'status' => 200,
            'pesan' => 'login berhasil',
            'data' => $user
        ]);
    }
}
