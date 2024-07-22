<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'content',
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'user_package_pivot');
    }
}
