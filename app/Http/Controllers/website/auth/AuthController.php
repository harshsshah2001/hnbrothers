<?php

namespace App\Http\Controllers\website\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserRegisterRequest;
use App\Models\website\WebsiteUser;
use App\Services\WebsiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $websiteService;


    public function __construct(WebsiteService $websiteService)
    {
        $this->websiteService = $websiteService;
    }


    /**
     * Registration Page
     */
    public function register()
    {
        return view('website.auth.register');
    }


    /**
     * Send OTP
     */
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => [
                'required',
                'string',
                'max:20',
            ],
        ]);

        $result = $this->websiteService->sendOtp(
            $request->phone
        );

        if (!$result['success']) {

            return response()->json(
                $result,
                429
            );
        }

        return response()->json($result);
    }


    /**
     * Verify OTP
     */
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => [
                'required',
                'string',
                'max:20',
            ],

            'otp' => [
                'required',
                'digits:6',
            ],
        ]);

        $result = $this->websiteService->verifyOtp(
            $request->phone,
            $request->otp
        );

        if (!$result['success']) {

            return response()->json(
                $result,
                422
            );
        }

        return response()->json($result);
    }


    /**
     * Register User
     */
    public function registerResponse(UserRegisterRequest $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Check OTP Verification
        |--------------------------------------------------------------------------
        */

        if (!$this->websiteService->isOtpVerified($request->phone)) {

            return back()
                ->withErrors([
                    'otp' => 'Please verify your mobile number first.',
                ])
                ->withInput();
        }


        /*
        |--------------------------------------------------------------------------
        | Create User
        |--------------------------------------------------------------------------
        */

        $user = WebsiteUser::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'phone'    => $request->phone,
        ]);


        /*
        |--------------------------------------------------------------------------
        | Registration Log
        |--------------------------------------------------------------------------
        */

        Log::info('Website user registered successfully', [
            'user_id'  => $user->id,
            'username' => $user->username,
            'email'    => $user->email,
            'phone'    => $user->phone,
        ]);


        /*
        |--------------------------------------------------------------------------
        | Remove OTP Verification Status
        |--------------------------------------------------------------------------
        */

        $this->websiteService->removeOtpVerification(
            $request->phone
        );


        /*
        |--------------------------------------------------------------------------
        | Redirect
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('website.index')
            ->with(
                'success',
                'Account registered successfully.'
            );
    }


    /**
     * Login Page
     */
    public function login()
    {
        return view('website.auth.login');
    }
}