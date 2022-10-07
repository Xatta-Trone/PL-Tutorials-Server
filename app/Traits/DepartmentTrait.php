<?php

namespace App\Traits;

use App\Models\Admin\Department;
use Illuminate\Support\Facades\Storage;

trait DepartmentTrait
{

    public static $DEPARTMENT_CREATED = 'DEPARTMENT_CREATED';
    public static $DEPARTMENT_CREATION_ERROR = 'DEPARTMENT_CREATION_ERROR';

    public static $DEPARTMENT_NOT_FOUND = 'DEPARTMENT_NOT_FOUND';
    public static $DEPARTMENT_FOUND = 'DEPARTMENT_FOUND';

    public static $DEPARTMENT_NOT_UPDATED = 'DEPARTMENT_NOT_UPDATED';
    public static $DEPARTMENT_UPDATED = 'DEPARTMENT_UPDATED';

    public static $DEPARTMENT_NOT_DELETED = 'DEPARTMENT_NOT_DELETED';
    public static $DEPARTMENT_DELETED = 'DEPARTMENT_DELETED';

    public static $DEPARTMENT_NOT_RESTORED = 'DEPARTMENT_NOT_RESTORED';
    public static $DEPARTMENT_RESTORED = 'DEPARTMENT_RESTORED';


    public function upload()
    {

        if (request()->hasFile('image')) {
            //retrieve new file data
            $fileNameWithExt    =  request()->file('image')->getClientOriginalName();
            $fileNameWithoutExt = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = request()->file('image')->getClientOriginalExtension();
            $NewFileToStore     = request()->slug . '_' . request()->code . "." . $extension;
            //save new data
            $path               = request()->file('image')->storeAs('public/departments', $NewFileToStore);
        } else {
            $NewFileToStore     = null;
        }

        return $NewFileToStore;
    }

    public function updateimage()
    {


        $post = Department::find(request()->input('id'));

        $old_image = $post->image;


        if (request()->hasFile('image')) {
            if ($post->image != null) {
                $this->deleteimage($old_image);
                return $this->upload();
            } else {
                return $old_image;
            }
        } else {
            return $old_image;
        }
    }

    public function deleteimage($imageurl)
    {
        Storage::delete('public/departments/' . $imageurl);
    }
}