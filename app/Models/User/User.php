<?php

namespace App\Models\User;

use App\Models\Admin\Activity;
use App\Models\Admin\BanHistory;
use App\Models\Admin\Department;
use App\Traits\UserTrait;
use App\Models\Admin\Post;
use App\Models\Admin\UserTrace;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use HighIdeas\UsersOnline\Traits\UsersOnlineTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use LaratrustUserTrait, SoftDeletes;
    use HasFactory, Notifiable, HasApiTokens;
    use UsersOnlineTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'student_id',
        'user_letter',
        'whitelisted',
        'deleted_at',
        'status'
    ];

    protected $guarded = [];

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
    // protected $appends = ['department'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    /**
     * Get all of the post's comments.
     */
    public function causer()
    {
        return $this->morphMany(Activity::class, 'causer');
    }

    public function traces()
    {
        return $this->hasMany(UserTrace::class);
    }

    public function banhistories()
    {
        return $this->hasMany(BanHistory::class);
    }


    public function getDepartmentAttribute()
    {
        return Department::select('slug')->where('code', substr($this->student_id, 2, 2))->get()->first()->slug;
    }
}