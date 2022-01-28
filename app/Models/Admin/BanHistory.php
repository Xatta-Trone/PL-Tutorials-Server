<?php

namespace App\Models\Admin;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BanHistory extends Model
{
    use HasFactory;
    protected $guarded =  [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
