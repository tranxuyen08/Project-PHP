<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $table = 'users';

   protected $primarykey = 'id';

   protected $fillable = ['email', 'name', 'password', 'created_at', 'updated_at'];

   protected $hidden = [
    'password',
    ];

    public function userProfile() {
        return $this->hasOne(UserProfiles::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Orders::class, 'user_id');
    }

}
