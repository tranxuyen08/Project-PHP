<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $table = 'login';

    protected $primarykey = 'id';

    protected $fillable = ['email', 'password' , 'created_at', 'updated_at'];

}
