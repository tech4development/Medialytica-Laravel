<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Extend from Authenticatable
use Illuminate\Notifications\Notifiable; // Correct import
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SocialAdvertiser extends Authenticatable // Extend from Authenticatable instead of Model
{
    use HasFactory, Notifiable;

    protected $table = 'social_advertisers'; // Specify the table name if different from the model name

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country',
        'phone',
        'user_role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Boot method to listen to the created event.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($socialAdvertiser) {
            // When a new social advertiser is created, add them to the users table
           User::create([
                'name' => $socialAdvertiser->name,
                'email' => $socialAdvertiser->email,
                'password' => Hash::make($socialAdvertiser->password), // Ensure password is hashed
                'role' => 'social_advertiser',
            ]);
        });
    }

    // Define relationships with other models, if needed
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
