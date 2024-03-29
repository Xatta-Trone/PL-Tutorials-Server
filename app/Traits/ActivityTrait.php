<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\User\User;
use App\Models\Admin\Post;
use App\Models\Permission;
use App\Models\Admin\Admin;
use App\Models\Admin\Quote;
use App\Models\Admin\Reply;
use Illuminate\Support\Str;
use App\Models\Admin\Course;
use App\Models\Admin\Contact;
use App\Models\Admin\Activity;
use App\Models\Admin\Ban;
use App\Models\Admin\BanDays;
use App\Models\Admin\BanHistory;
use App\Models\Admin\Book;
use App\Models\Admin\Settings;
use App\Models\Admin\Software;
use App\Models\Admin\UserData;
use App\Models\Admin\LevelTerm;
use App\Models\Admin\Department;
use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use App\Models\Admin\Testimonial;
use App\Models\Admin\UserTrace;

trait ActivityTrait
{
    private function saveActivity($causer = 'user', $causer_id, $activity, $model, $model_id, $label, $data = null)
    {
        $pat_id = $this->getUserTokenId();
        $data = [
            'causer_type' => $this->getuserclass($causer),
            'causer_id' => $causer_id,
            'activity' => $activity,
            'model_type' => $this->getpostclass($model),
            'model_id' => $model_id,
            'label' => $label,
            'data' => $data,
            // 'pat_id' => $this->getUserTokenId(),
        ];
        $data = array_merge($data, ($pat_id != null ? ['pat_id' => $pat_id] : []));
        Activity::create($data);
    }


    public function getuserclass($usertype)
    {

        return Str::contains(Str::lower($usertype), 'admin') ? get_class(new Admin()) : get_class(new User());
    }
    public function getpostclass($posttype)
    {

        $posttype = Str::lower($posttype);


        switch ($posttype) {
            case 'department':
                return get_class(new Department());
                break;

            case 'levelterm':
                return get_class(new LevelTerm());
                break;

            case 'admin':
                return get_class(new Admin());
                break;

            case 'user':
                return get_class(new User());
                break;
            case 'testimonial':
                return get_class(new Testimonial());
                break;
            case 'course':
                return get_class(new Course());
                break;
            case 'post':
                return get_class(new  Post());
                break;
            case 'book':
                return get_class(new Book());
                break;
            case 'software':
                return get_class(new Software());
                break;
            case 'userdata':
                return get_class(new UserData());
                break;
            case 'contact':
                return get_class(new Contact());
                break;
            case 'activity':
                return get_class(new Activity());
                break;
            case 'role':
                return get_class(new Role());
                break;
            case 'permission':
                return get_class(new Permission());
                break;
            case 'quote':
                return get_class(new Quote());
                break;
            case 'reply':
                return get_class(new Reply());
                break;
            case 'utilities':
                return get_class(new Settings());
                break;
            case 'faq':
                return get_class(new Faq());
                break;
            case 'usertrace':
                return get_class(new UserTrace());
                break;
            case 'ban':
                return get_class(new Ban());
                break;
            case 'bandays':
                return get_class(new BanDays());
                break;
            case 'banhistory':
                return get_class(new BanHistory());
                break;
            case 'page':
                return get_class(new Page());
                break;

            default:
                return $posttype;
                break;
        }
    }

    private function getUserTokenId()
    {
        if (request()->bearerToken() != null) {

            return explode("|", request()->bearerToken())[0];
        }
        return null;
    }
}
