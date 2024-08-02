<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Role extends Model
{
    use HasFactory;use SoftDeletes;

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

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_has_permissions')->withPivot('permission_name');
        return $this->belongsToMany(Permission::class)->using(PermissionRole::class)->withPivot('permission_name');
    }
}
