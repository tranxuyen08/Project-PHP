<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $primarykey = 'id';

    protected $fillable = ['category_id', 'name', 'amount', 'created_at', 'updated_at'];

    public function productOrders() {
        return $this->hasMany(ProductOrders::class, 'product_id');
    }

    public function category() {
        return $this->hasOne(Category::class);
    }
}
