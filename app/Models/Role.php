<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'full_name',
        'email',
        'password',
        'role',
        'is_sent'
    ];

    protected $hidden = [
        'password',
    ];
}
