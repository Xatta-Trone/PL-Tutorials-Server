<?php

namespace App\Http\Controllers\Api\User;

use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use App\Models\Admin\Quote;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Models\Admin\Settings;
use App\Models\Admin\UserData;
use Illuminate\Support\Carbon;
use App\Models\Admin\Testimonial;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ContactCreateRequest;

class GeneralDataController extends Controller
{


    public function quote()
    {
        $expire = Carbon::now()->endOfDay()->addSecond();

        return Cache::remember('daily-quote', $expire, function () {
            $data = Quote::select('quote', 'author')->latest()->first();
            return $data != null ? $this->successResponse('QUOTE_FOUND', $data) : $this->errorResponse('QUOTE_NOT_FOUND', $data);
        });

    }

    public function countData()
    {


        $users =  Cache::remember('users', 3600, function () {
            return DB::table('users')->count();
        });
        $books =  Cache::remember('books', 3600, function () {
            return DB::table('books')->count();
        });
        $softwares =  Cache::remember('softwares', 3600, function () {
            return DB::table('softwares')->count();
        });
        $activities =  Cache::remember('activities', 3600, function () {
            DB::table('activities')->where('activity', 'downloaded')->count();
        });

        $data = [
            'users' => $users,
            'books' => $books,
            'softwares' => $softwares,
            'downloads' => $activities
        ];
        return $this->successResponse('COUNT_SUCCESS', $data);
    }

    public function testimonials()
    {
        $expire = Carbon::now()->endOfDay()->addSecond();
        return Cache::remember('testimonials', $expire, function () {
            $data = Testimonial::where('status', 1)->latest()->take(10)->get(['name', 'user_letter', 'dept_batch', 'message']);
            return $data != null ? $this->successResponse('TESTIMONIAL_FOUND', $data) : $this->errorResponse('TESTIMONIAL_NOT_FOUND', $data);
        });


    }

    public function contactSubmission(ContactCreateRequest $request)
    {
        $data = Contact::create($request->validated());
        return $data != null ? $this->successResponse('RESPONSE_RECEIVED_SUCCESSFULLY') : $this->errorResponse('RESPONSE_COULD_NOT_RECEIVED');
    }

    public function socialLinks()
    {
        $expire = Carbon::now()->endOfDay()->addSecond();
        return Cache::remember('socialLinks', $expire, function () {
            $data = Settings::whereIn('key', ['facebook', 'messenger', 'youtube', 'email', 'android-url'])->get(['key', 'value', 'fa4_icon']);
            return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
        });

    }

    public function getSettingValue()
    {
        $key = request()->get('key');

        if (!$key) {
            return $this->errorResponse('LINKS_NOT_FOUND', '', 404);
        }

        $data = Settings::where('key', request()->get('key'))->get(['key', 'value'])->first();
        return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
    }

    public function faq()
    {
        $expire = Carbon::now()->endOfDay()->addSecond();
        return Cache::remember('faq', $expire, function () {
            $data = Faq::where('status', 1)->get(['title', 'body', 'id']);
            return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
        });


    }
    public function halls()
    {
        $data = UserData::distinct()->get(['hall_name'])->pluck('hall_name');
        return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
    }

    public function pages()
    {
        $expire = Carbon::now()->endOfDay()->addSecond();
        return Cache::remember('pages', $expire, function () {
            $data = Page::where('status', 1)->get(['title', 'slug', 'id']);
            return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
        });

    }

    public function pageBySlug(string $slug)
    {
         $data = Page::where('slug', $slug)->where('status', 1)->get()->first();
        return $data != null ? $this->successResponse('PAGE_FOUND', $data) : $this->errorResponse('PAGE_NOT_FOUND', $data);

        // $expire = Carbon::now()->endOfDay()->addSecond();
        // return Cache::get('pages-' . $slug, $expire, function () use ($slug) {
        //     $data = Page::where('slug', $slug)->where('status', 1)->get()->first();
        //     return $data != null ? $this->successResponse('PAGE_FOUND', $data) : $this->errorResponse('PAGE_NOT_FOUND', $data);
        // });

    }
}