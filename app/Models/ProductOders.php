<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOders extends Model
{
    use HasFactory;

    protected $table = 'product_oders';

    protected $primarykey = 'id';

    protected $fillable = ['oder_id', 'product_id', 'created_at', 'updated_at'];

    protected $dateFormat = 'U';
}
