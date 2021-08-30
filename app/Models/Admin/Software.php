<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'softwares';
    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
