<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'traject_name',
        'user_id',
        'is_active',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
