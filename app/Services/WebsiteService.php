<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Log;

class WebsiteService
{
    /**
     * Send OTP
     */
    public function sendOtp(string $phone): array
    {
        $phone = trim($phone);

        /*
        |--------------------------------------------------------------------------
        | Rate Limit
        |--------------------------------------------------------------------------
        |
        | Maximum 3 OTP requests in 10 minutes
        |
        */

        $rateLimitKey = 'otp-request:' . $phone;

        if (RateLimiter::tooManyAttempts($rateLimitKey, 3)) {

            $seconds = RateLimiter::availableIn($rateLimitKey);

            return [
                'success' => false,
                'message' => "Too many OTP requests. Please try again in {$seconds} seconds.",
            ];
        }

        RateLimiter::hit($rateLimitKey, 600);

        /*
        |--------------------------------------------------------------------------
        | Generate OTP
        |--------------------------------------------------------------------------
        */

        $otp = random_int(100000, 999999);

        /*
        |--------------------------------------------------------------------------
        | Hash OTP
        |--------------------------------------------------------------------------
        */

        $hashedOtp = Hash::make($otp);

        /*
        |--------------------------------------------------------------------------
        | Log OTP
        |--------------------------------------------------------------------------
        |
        | Only for development/testing.
        | Remove OTP from logs in production.
        |
        */

        Log::info('Website Registration OTP', [
            'phone' => $phone,
            'otp' => $otp,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Store Hashed OTP in Cache
        |--------------------------------------------------------------------------
        |
        | OTP will expire automatically after 5 minutes.
        |
        */

        Cache::put(
            'otp:' . $phone,
            $hashedOtp,
            now()->addMinutes(5)
        );

        /*
        |--------------------------------------------------------------------------
        | Send OTP
        |--------------------------------------------------------------------------
        |
        | Integrate SMS provider here.
        |
        */

        // SmsService::send($phone, $otp);

        return [
            'success' => true,
            'message' => 'OTP sent successfully.',
        ];
    }


    /**
     * Verify OTP
     */
    public function verifyOtp(string $phone, string $otp): array
    {
        $phone = trim($phone);

        $otpKey = 'otp:' . $phone;

        /*
        |--------------------------------------------------------------------------
        | Get Hashed OTP From Cache
        |--------------------------------------------------------------------------
        */

        $hashedOtp = Cache::get($otpKey);

        /*
        |--------------------------------------------------------------------------
        | OTP Expired / Not Found
        |--------------------------------------------------------------------------
        */

        if (!$hashedOtp) {

            return [
                'success' => false,
                'message' => 'OTP expired or not found.',
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | Verify OTP Hash
        |--------------------------------------------------------------------------
        */

        if (!Hash::check($otp, $hashedOtp)) {

            return [
                'success' => false,
                'message' => 'Invalid OTP.',
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | OTP Verified
        |--------------------------------------------------------------------------
        |
        | Delete OTP so that it cannot be reused.
        |
        */

        Cache::forget($otpKey);

        /*
        |--------------------------------------------------------------------------
        | Store OTP Verification Status
        |--------------------------------------------------------------------------
        |
        | Registration can check this status.
        |
        */

        Cache::put(
            'otp-verified:' . $phone,
            true,
            now()->addMinutes(10)
        );

        return [
            'success' => true,
            'message' => 'OTP verified successfully.',
        ];
    }


    /**
     * Check whether phone OTP was verified
     */
    public function isOtpVerified(string $phone): bool
    {
        return Cache::get(
            'otp-verified:' . trim($phone),
            false
        );
    }


    /**
     * Remove OTP verification status
     */
    public function removeOtpVerification(string $phone): void
    {
        Cache::forget(
            'otp-verified:' . trim($phone)
        );
    }
}
