<?php

namespace App\Models\User;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDevice extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'location_json',
        'device_ua',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
