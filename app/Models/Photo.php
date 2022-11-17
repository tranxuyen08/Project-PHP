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
        'src',
        'mime_type',
        'description',
        'alt',
    ];
}
