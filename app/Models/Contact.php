<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    // Define the fields that are mass assignable
    protected $fillable = ['first_name', 'last_name', 'email', 'message'];
}
