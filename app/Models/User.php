<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'email_verified_at',
                            'password', 'status', 'permission'];
    protected $hidden = ['password', 'remember_token',];

    public function setPasswordAtribute($value){
        $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value): $value;
    }
}
