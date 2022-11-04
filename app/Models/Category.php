<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primarykey = 'id';

    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function products() {
        return $this->hasMany(Products::class, 'category_id');
    }

}
