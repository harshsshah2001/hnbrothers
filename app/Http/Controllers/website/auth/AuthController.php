<?php

namespace App\Http\Controllers\website\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\UserRegisterRequest;
use App\Models\website\WebsiteUser;
use App\Services\WebsiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


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
        | Remove OTP Verification Status
        |--------------------------------------------------------------------------
        */
        session([
            'website_user_id'=>$user->id,
            'website_username'=>$user->username
        ]);


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
    public function logincheck(Request $request)
{
    /*
    |--------------------------------------------------------------------------
    | Validate Login Request
    |--------------------------------------------------------------------------
    */

    $request->validate([
        'email' => [
            'required',
            'email',
        ],

        'otp' => [
            'required',
            'digits:6',
        ],

        'password' => [
            'required',
        ],
    ]);


    /*
    |--------------------------------------------------------------------------
    | Normalize Email
    |--------------------------------------------------------------------------
    */

    $email = strtolower(trim($request->email));


    /*
    |--------------------------------------------------------------------------
    | Find Registered User
    |--------------------------------------------------------------------------
    */

    $user = WebsiteUser::where('email', $email)->first();

    if (!$user) {
        return back()
            ->withErrors([
                'email' => 'This email address is not registered.',
            ])
            ->withInput();
    }


    /*
    |--------------------------------------------------------------------------
    | Get OTP From Cache
    |--------------------------------------------------------------------------
    */

    $otpKey = 'login-otp:' . $email;

    $hashedOtp = Cache::get($otpKey);


    /*
    |--------------------------------------------------------------------------
    | Check OTP Exists / Expired
    |--------------------------------------------------------------------------
    */

    if (!$hashedOtp) {
        return back()
            ->withErrors([
                'otp' => 'OTP has expired or was not found. Please request a new OTP.',
            ])
            ->withInput();
    }


    /*
    |--------------------------------------------------------------------------
    | Verify OTP
    |--------------------------------------------------------------------------
    */

    if (!Hash::check($request->otp, $hashedOtp)) {
        return back()
            ->withErrors([
                'otp' => 'Invalid OTP.',
            ])
            ->withInput();
    }


    /*
    |--------------------------------------------------------------------------
    | Verify Password
    |--------------------------------------------------------------------------
    */

    if (!Hash::check($request->password, $user->password)) {
        return back()
            ->withErrors([
                'password' => 'Invalid password.',
            ])
            ->withInput();
    }


    /*
    |--------------------------------------------------------------------------
    | Login User
    |--------------------------------------------------------------------------
    */

    Auth::login($user);

    $request->session()->regenerate();


    /*
    |--------------------------------------------------------------------------
    | Remove Used OTP
    |--------------------------------------------------------------------------
    */

    Cache::forget($otpKey);


    /*
    |--------------------------------------------------------------------------
    | Redirect To Dashboard
    |--------------------------------------------------------------------------
    */

    return redirect()
        ->route('website.dashboard')
        ->with(
            'success',
            'Login successful.'
        );
}
}
