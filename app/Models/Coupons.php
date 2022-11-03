<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;

    protected $table = 'coupons';

    protected $primarykey = 'id';

    protected $fillable = ['code', 'created_at', 'updated_at'];

    protected $dateFormat = 'U';
}
