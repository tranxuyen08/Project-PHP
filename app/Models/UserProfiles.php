<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primarykey = 'id';

    protected $fillable = ['user_id', 'phone_number', 'country', 'city', 'address', 'date_of_birth', 'status', 'gender', 'created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
