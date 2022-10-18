<?php

namespace App\Models\Admin;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BanHistory extends Model
{
    use HasFactory;
    protected $guarded =  [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ban_from' => 'datetime',
        'ban_upto' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}