<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'email_verified_at',
                            'password', 'status', 'permission'];
    protected $hidden = ['password', 'remember_token',];
}
