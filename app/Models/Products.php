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

    protected $dateFormat = 'U';
    
}
