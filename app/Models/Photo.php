<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';

    protected $primarykey = 'id';

    protected $fillable = [
        'product_id',
        'src',
        'title',
        'mime_type',
        'description',
        'alt',
    ];

    public function product() {
        return $this->belongsTo(Products::class);
    }
}
