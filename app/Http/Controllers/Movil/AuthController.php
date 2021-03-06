<?php

namespace App\Http\Controllers\Movil;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;


class AuthController extends Controller
{
public function authenticate(Request $request)
{
$credentials = $request->only('email', 'password');
try {
    if (! $token = JWTAuth::attempt($credentials)) {
        return response()->json(['error' => 'invalid_credentials'], 400);
    }
} catch (JWTException $e) {
    return response()->json(['error' => 'could_not_create_token'], 500);
}
return response()->json(compact('token'));
}

public function getAuthenticatedUser(Request $request)
{
try {
    if (!$user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
    }
    } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
    } catch (TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
    } catch (JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
    }
    return response()->json(compact('user'));
}

public  function  logout(Request  $request) {
    $this->validate($request, [
        'token' => 'required'
    ]);

    try {
        JWTAuth::invalidate($request->token);
        return  response()->json([
            'status' => 'ok',
            'message' => 'Cierre de sesión exitoso.'
        ]);
    } catch (JWTException  $exception) {
        return  response()->json([
            'status' => 'unknown_error',
<<<<<<< HEAD
            'message' => 'Al usuario no se le pudo cerrar la sesión.'
        ], 500);
=======
	    'token'=>$request->token,
            'message' => 'Al usuario no se le pudo cerrar la sesión.'
        ]);
>>>>>>> cfb2efbd1aea16689dfb5c49191d52144fb2c975
    }
}

public function register(Request $request)
{
        $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
    }

    $user = User::create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => Hash::make($request->get('password')),
    ]);

    $token = JWTAuth::fromUser($user);

    return response()->json(compact('user','token'),201);
}
}
