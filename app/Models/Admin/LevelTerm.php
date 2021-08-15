<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LevelTerm extends Model
{
    use HasFactory;

    public function dept()
    {
        return $this->belongsTo(Department::class);
    }
}
