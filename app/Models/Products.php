<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $primarykey = 'id';

    protected $fillable = ['categry_id', 'name', 'amount', 'created_at', 'updated_at'];

    public function productOders() {
        return $this->hasMany(ProductOders::class, 'product_id');
    }

    public function category() {
        return $this->hasOne(Category::class);
    }
}
