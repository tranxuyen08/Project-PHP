<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primarykey = 'id';

    protected $fillable = ['user_id', 'amount', 'status', 'coupon_id', 'created_at', 'updated_at'];

    public function users() {
        return $this->belongsToMany(Users::class);
    }

    public function productOrders() {
        return $this->hasMany(ProductOrders::class, 'order_id');
    }

    public function coupon() {
        return $this->belongsTo(Coupons::class);
    }
}