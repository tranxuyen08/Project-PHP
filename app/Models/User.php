<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_USER = 0;
    const ROLE_ADMIN = 1;

   protected $table = 'users';

   protected $primarykey = 'id';

   protected $fillable = ['email', 'name', 'password', 'role', 'created_at', 'updated_at'];

   protected $hidden = [
    'password',
    ];

    public function userProfile() {
        return $this->hasOne(UserProfiles::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Orders::class, 'user_id');
    }

    public function loginUser() {
        return $this->hasMany(Register::class, 'user_id');
    }

}
