<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\ResponseFormat;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateSanctum extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return ResponseFormat::error($validateUser->errors(), 'Validation error', Response::HTTP_UNAUTHORIZED);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return ResponseFormat::error(false, 'Email atau Password salah!!, silahkan cek kembali!', Response::HTTP_UNAUTHORIZED);
            }

            $user = User::where('email', $request->email)->first();
            $token = $user->createToken("API TOKEN")->plainTextToken;

            return ResponseFormat::success($user, 'Login Success', $token);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function status(Request $request)
    {
        try {
            if (auth()->user()) {
                return ResponseFormat::success(auth()->user(), 'Already Logged', $request->bearerToken());
            }
            return ResponseFormat::error('Unauthorized', 'user belum login', Response::HTTP_UNAUTHORIZED);
        } catch (\Throwable $th) {
            return ResponseFormat::error('Unauthorized', $th->getMessage(), Response::HTTP_UNAUTHORIZED);
        }
    }
