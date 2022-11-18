<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    // /**
    //  * The model's default values for attributes.
    //  *
    //  * @var array
    //  */
    // protected $attributes = [
    //     'department_slug' => 'ce',
    // ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
