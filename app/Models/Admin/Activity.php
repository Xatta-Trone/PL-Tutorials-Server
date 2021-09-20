<?php

namespace App\Models\Admin;

use App\Models\User\User;
use App\Models\Admin\Post;
use App\Models\Admin\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $with = ['causer'];


    /**
     * Get the parent commentable model (post or video).
     */
    public function causer()
    {
        return $this->morphTo();
    }

    public function getCauserNameAttribute()
    {
        dd($this->causer);
        switch ($this->causer) {
            case 'admin':
                $admin = Admin::find($this->causer_id);
                //dd($admin->name);
                return ($admin != null) ? $admin->name : 'Admin Deleted';
                break;
            case 'user':
                if ($this->causer_id === 0) {
                    return 'Guest';
                }

                $user = User::find($this->causer_id);
                return ($user != null) ? $user->name : 'User Deleted';
                break;

            default:
                # code...
                break;
        }
    }

    public function getModelInfo($model, $id)
    {
        switch ($model) {
            case 'Post':
                $data  = Post::find($id);
                //dd($data);
                return ($data != null) ? $data->name : 'already deleted';
                break;

            default:
                # code...
                break;
        }
    }

    public function activityInfo()
    {
        $model = ucfirst($this->model);
        $model_id = $this->model_id;
        //dd($model,$model_id);
        switch ($model) {
            case 'Post':
                $data =  Post::with('course')->where('id', $model_id)->first();
                //dd($data);
                echo $data->course->slug;
                break;

            default:
                return '';
                break;
        }
    }
}
