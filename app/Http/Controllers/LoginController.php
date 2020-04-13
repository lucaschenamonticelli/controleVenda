<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Tymon\JWTAuth\JWTAuth;
use App\User;

class LoginController extends Controller
{
    // protected $jwt;

    /* public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    } */

    public function index(){
        return view('login');
    }

    public function logar(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:100',
            'senha' => 'required',
        ]);

        try {
            $apikey = '$2y$10$BRWDxM6gsy7XNBH4qGNr9ugVeKSVUpjaGSG.vPiBVjToJ4/Oy8W0y';
            return response()->json(['status' => 'success', 'api_key' => $apikey]);

            // $user = User::where('email', '=', 'sam@mail.com')->first();

            // if (!$token = $this->jwt->fromUser($user)) {
            //     return response()->json(['user_not_found'], 404);
            // }
             /*if (! $token = $this->jwt->attempt($request->only('email', 'senha'))) {
                exit('if');
                 return response()->json(['user_not_found'], 404);
             }

             exit('bdjsbdjsbfj'); */

        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], 500);

        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], 500);

        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent' => $e->getMessage()], 500);
        }

        return response()->json(compact('token'));
    }
}
