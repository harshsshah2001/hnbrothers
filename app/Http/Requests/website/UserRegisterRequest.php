<?php

namespace App\Http\Requests\website;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:website_users,email',
            ],

            'phone' => [
                'required',
                'string',
                'max:20',
            ],

            'otp' => [
                'required',
                'digits:6',
            ],

            'password' => [
                'required',
                'string',
                'min:6',
                'confirmed',
            ],
        ];
    }

    public function messages()
    {
        return [
            'username.required' =>
            'Username is required',

            'email.required' =>
            'Email is required',

            'email.email' =>
            'Email must be a valid email address',

            'email.unique' =>
            'This email is already registered',

            'phone.required' =>
            'Mobile number is required',

            'otp.required' =>
            'OTP is required',

            'otp.digits' =>
            'OTP must be 6 digits',

            'password.required' =>
            'Password is required',

            'password.min' =>
            'Password must be at least 6 characters',

            'password.confirmed' =>
            'Passwords do not match',
        ];
    }
}
