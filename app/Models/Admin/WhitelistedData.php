<?php

namespace App\Models\Admin;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhitelistedData extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * model life cycle event listeners
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function ($instance) {
            $instance->data = strtolower($instance->data);
        });

        static::updating(function ($instance) {
            $instance->data = strtolower($instance->data);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
