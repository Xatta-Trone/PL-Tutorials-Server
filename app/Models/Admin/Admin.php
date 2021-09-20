<?php

namespace App\Models\Admin;

use App\Models\Admin\Post;
use App\Models\Admin\Activity;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    // protected $with = [''];
    // protected $appends = [
    //     'allPermissions',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class);
    // }

    // public function permissions()
    // {
    //     $roles = $this->roles()->pluck('admin_role.role_id');
    //     $permissions = PermissionRole::whereIn('role_id', $roles)->distinct()->pluck('permission_id');
    //     return  Permission::whereIn('id', $permissions)->distinct()->pluck('name');
    // }

    // public function canperform($permission)
    // {
    //     return !!in_array($permission, $this->permissions()->toArray());
    // }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    /**
     * Get all of the post's comments.
     */
    public function activities()
    {
        return $this->morphMany(Activity::class, 'causer');
    }
}
