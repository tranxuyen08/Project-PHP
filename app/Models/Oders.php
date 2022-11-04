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

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function productOrders() {
        return $this->hasMany(ProductOders::class, 'order_id');
    }

    public function coupon() {
        return $this->belongsTo(Coupons::class);
    }
}