<?php

namespace App\Models\website;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class WebsiteUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'website_users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
    ];

    protected $hidden = [
        'password',
    ];
}