<?php

namespace App\Traits;

use App\Models\Admin\Book;
use App\Models\Admin\Post;
use App\Models\Admin\Software;
use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    public function upload()
    {

        if (request()->hasFile('image')) {
            //retrieve new file data
            $fileNameWithExt    =  request()->file('image')->getClientOriginalName();
            $fileNameWithoutExt = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = request()->file('image')->getClientOriginalExtension();
            $NewFileToStore     = request()->department_slug . '_' . request()->level_term_slug . '_' . request()->course_id . '_' . time() . '.' . $extension;
            //save new data
            $path               = request()->file('image')->storeAs('public/' . request()->post_type, $NewFileToStore);
        } else {
            $NewFileToStore     = null;
        }

        return $NewFileToStore;
    }

    public function updateimage()
    {
        $post = [];

        $post_type = request()->post_type ?? 'post';

        if ($post_type == 'book') {
            $post = Book::find(request()->input('id'));
        } elseif ($post_type == 'software') {
            $post = Software::find(request()->input('id'));
        } elseif ($post_type == 'post') {
            $post = Post::find(request()->input('id'));
        } else {
            return null;
        }

        $old_image = $post->image;


        if (request()->hasFile('image')) {
            if ($post->image != null) {
                $this->deleteimage($old_image, $post_type);
                return $this->upload();
            } else {
                return $old_image;
            }
        } else {
            return $old_image;
        }
    }

    public function deleteimage($imageurl, $post_type)
    {
        Storage::delete('public/' . $post_type . '/' . $imageurl);
    }
}
