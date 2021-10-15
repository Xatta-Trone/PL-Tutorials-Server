<?php

namespace App\Models\Admin;

use App\Models\Admin\LevelTerm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function levelterm()
    {
        return $this->belongsTo(LevelTerm::class, 'level_term_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
