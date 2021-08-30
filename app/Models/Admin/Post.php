<?php

namespace App\Models\Admin;

use App\Models\Admin\Admin;
use App\Models\Admin\Course;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user()
    {

        return $this->belongsTo(Admin::class, 'user_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }



    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // public function scopeProfile($q)
    // {
    //     return $q->when($this->user_type == 'admin', function ($query) {
    //         return $query->with('admin');
    //     })->when($this->user_type == 'user', function ($query) {
    //         return $query->with('user');
    //     });
    // }

    // public function scopeCour($q)
    // {
    //     return $q->when($this->course_id != null, function ($query) {
    //         return $query->with('admin');
    //     })->when($this->user_type == 'user', function ($query) {
    //         return $query->with('user');
    //     });
    // }

    public function scopeWithLastLogin($query)
    {
        // $query->addSelect([
        //     // 'course_info' =>  Course::select('id', 'slug')
        //     //     ->whereColumnNotNull('courses.id', 'course_id')
        //     //     ->first()
        //     //     ->get()
        //     'course_info' =>  $q->with
        // ]);
        $query->with('admin');

        dd($this->course_id);
    }

    public function scopeExclude($query, $columns)
    {
        return $query->select(array_diff($this->getTableColumns(), (array) $columns));
    }

    /**
     * Get the array of columns
     * @return mixed
     */
    private function getTableColumns()
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
