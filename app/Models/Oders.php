<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oders extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primarykey = 'id';

    protected $fillable = ['user_id', 'amount', 'quantity', 'status', 'coupon_id', 'created_at', 'updated_at'];

    protected $dateFormat = 'U';
}
