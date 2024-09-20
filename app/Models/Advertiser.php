<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Advertiser extends Authenticatable
{

    use Notifiable;


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



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
        'user_role'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }



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

    protected static function boot()
    {
        parent::boot();

        static::created(function ($advertiser) {
            User::create([
                'name' => $advertiser->name,
                'email' => $advertiser->email,
                'password' => $advertiser->password, // Ensure you hash the password before saving
                'user_role' => 'advertiser',
                'status' => 'inactive',
            ]);
        });
    }


}
