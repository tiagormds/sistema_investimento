<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar', 'user_id', 'social_email'];
    protected $hidden = [];
}
