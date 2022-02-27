<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::saving(function ($dept) {
            $dept->can_be_accessed_by = implode(',', array_unique(explode(',', $dept->can_be_accessed_by . ',' . $dept->slug)));
        });

        static::updating(function ($dept) {
            $dept->can_be_accessed_by = implode(',', array_unique(explode(',', $dept->can_be_accessed_by . ',' . $dept->slug)));
        });
    }



    public function levelterms()
    {
        return $this->hasMany(LevelTerm::class);
    }
}