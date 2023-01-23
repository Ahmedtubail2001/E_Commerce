<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ApiAuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email|string|exists:user,email',
            'password' => 'required|string',
        ]);

        if (!$validator->fails()) {
            $user = User::where('email', $request->get('email'))->first();
            if (Hash::check($request->get('password'), $user->password)) {
                $token = $user->createToken('User_Token');
                $user->setAttribute('token', $token->accessToken);
                return response()->json([
                    'status' => true,
                    'massage' => 'logged successfully',
                    'data' => $user,
                    // 'token' => $token,
                ]);
            } else {
                return response()->json((['massage' => 'Login failed, wrong credentials'])
                    , HttpFoundationResponse::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json(['massage' => $validator->getMessageBag()->first()]
                , HttpFoundationResponse::HTTP_BAD_REQUEST);
        }
    }
}