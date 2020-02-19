<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use App\User;

use JWTAuth;
use JWTFactory;


class UuidController extends Controller
{
    
    public function register(Request $request)
    {
        $user           = new User;
        $user->id       = Uuid::uuid4()->getHex();
        $user->name     =  $request->name;
        $user->email    =  $request->email;
        $user->password =  bcrypt($request->password);
        $user->save();

        $token = auth()->login($user);

        return $this->respondWithToken($token);
    }
    
    public function login() {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        return $this->respondWithToken($token);
    }
    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }
}
