<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthController extends Controller
{
    /*
    أكثر من جهاز شغال في نفس الوقت outh الطريقة الأولي في ا ل
    (فعال لنفس الجهاز في نفس الوقت TOKEN السماح بوجود أكثر من)
     **/
    //{1}

    // public function login(Request $request)
    // {
    //     $validator = Validator($request->all(), [
    //         // db اسم الجدول الموجود في ال users ال
    //         'email' => 'required|email|string|exists:users,email',
    //         'password' => 'required|string',
    //     ]);

    //     if (!$validator->fails()) {
    //         $user = User::where('email', $request->get('email'))->first();
    //         if (Hash::check($request->get('password'), $user->password)) {
    //             $token = $user->createToken('User_Token');
    //             // $user->setAttribute('token', $token->accessToken);
    //             return response()->json([
    //                 'status' => true,
    //                 'massage' => 'logged successfully',
    //                 'data' => $user,
    //                 'token' => $token,
    //             ]);
    //         } else {
    //             return response()->json((['massage' => 'Login failed, wrong credentials'])
    //                 , Response::HTTP_BAD_REQUEST);
    //         }
    //     } else {
    //         return response()->json(['massage' => $validator->getMessageBag()->first()]
    //             , Response::HTTP_BAD_REQUEST);
    //     }
    // }
    // *********************************************************************

    /*

    جهاز واحد فط شغال في نفس الوقت  outh الطريقة الثانيه في ال
    (اذا تم تسجيل الدخول لأكثر من جهاز يرفض التسجيل)
     **/
    // {{2}}

    // public function login(Request $request)
    // {
    //     $validator = Validator($request->all(), [
    //         // db اسم الجدول الموجود في ال users ال
    //         'email' => 'required|email|string|exists:users,email',
    //         'password' => 'required|string',
    //     ]);
    //     if (!$validator->fails()) {
    //         $user = User::where('email', $request->get('email'))->first();
    //         if (Hash::check($request->get('password'), $user->password)) {
    //             if (!$this->activeLogins($user->id)) {
    //                 $token = $user->createToken('User_Token');
    //                 // $user->setAttribute('token', $token->accessToken);
    //                 return response()->json([
    //                     'status' => true,
    //                     'massage' => 'logged successfully',
    //                     'data' => $user,
    //                     'token' => $token,
    //                 ]);
    //             } else {
    //                 return response()->json([
    //                     'status' => false,
    //                     'massage' => 'Unable to login from tow devices at the same time.',
    //                 ]);
    //             }
    //         } else {
    //             return response()->json((['massage' => 'Login failed, wrong credentials'])
    //                 , Response::HTTP_BAD_REQUEST);
    //         }
    //     } else {
    //         return response()->json(['massage' => $validator->getMessageBag()->first()]
    //             , Response::HTTP_BAD_REQUEST);
    //     }
    // }
    // public function activeLogins($userId)
    // {
    //     return DB::table('oauth_access_tokens')
    //         ->where('user_id', $userId)
    //         ->where('name', 'User_Token')
    //     // (لسا شغال login ال) يعنى أإنه لسا شغالين revoked false
    //         ->where('revoked', false)
    //         ->count();
    // }

    /*

    يتم تسكير كال ال قبل logim عند عمل outh الطريقة الثالثة في ال
    (يسمح للمستخدم بالإستخدام) راح يكون 0 login ما عدا آخر (logout معمول الهم) جميعهم راح يكونو 1 revoked أي أن ال
     **/
    // {{3}}
    // public function login(Request $request)
    // {
    //     $validator = Validator($request->all(), [
    //         // db اسم الجدول الموجود في ال users ال
    //         'email' => 'required|email|string|exists:users,email',
    //         'password' => 'required|string',
    //     ]);
    //     if (!$validator->fails()) {
    //         $user = User::where('email', $request->get('email'))->first();
    //         if (Hash::check($request->get('password'), $user->password)) {

    //             //REVOKE ACTIVE TOKENS
    //             $this->revokedActiveToken($user->id);

    //             //CREATE TOKEN
    //             return response()->json([
    //                 'status' => true,
    //                 'massage' => 'Logged in successfully',
    //                 'data' => $user,
    //             ]);
    //         } else {
    //             return response()->json((['massage' => 'Login failed, wrong credentials'])
    //                 , Response::HTTP_BAD_REQUEST);
    //         }
    //     } else {
    //         return response()->json(['massage' => $validator->getMessageBag()->first()]
    //             , Response::HTTP_BAD_REQUEST);
    //     }
    // }
    // public function revokedActiveToken($userId)
    // {
    //     DB::table('oauth_access_tokens')
    //         ->where('user_id', $userId)
    //         ->where('name', 'User_Token')
    //         ->update(['revoked' => false]);
    // }

    public function logout(Request $request)
    {
        // $token = auth('api')->user()->token();
        // return response()->json(['token' => $token]);

        $token = auth('api')->user()->token();
        $revoked = $token->revoke();
        return response()->json(['status' => $revoked, 'message' => $revoked ?
            'Logged out successfully' : 'failed to logout',
        ], $revoked ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}