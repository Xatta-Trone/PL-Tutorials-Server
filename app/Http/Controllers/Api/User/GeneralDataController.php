<?php

namespace App\Http\Controllers\Api\User;

use App\Models\Admin\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactCreateRequest;
use App\Models\Admin\Contact;
use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use App\Models\Admin\Settings;
use App\Models\Admin\Testimonial;
use App\Models\Admin\UserData;

class GeneralDataController extends Controller
{
    public function quote()
    {
        $data = Quote::select('quote', 'author')->latest()->first();
        return $data != null ? $this->successResponse('QUOTE_FOUND', $data) : $this->errorResponse('QUOTE_NOT_FOUND', $data);
    }

    public function countData()
    {

        $data = [
            'users' => DB::table('users')->count(),
            'books' => DB::table('books')->count(),
            'softwares' => DB::table('softwares')->count(),
            'downloads' => DB::table('activities')->where('activity', 'downloaded')->count()
        ];
        return $this->successResponse('COUNT_SUCCESS', $data);
    }

    public function testimonials()
    {
        $data = Testimonial::where('status', 1)->latest()->take(10)->get(['name', 'user_letter', 'dept_batch', 'message']);
        return $data != null ? $this->successResponse('TESTIMONIAL_FOUND', $data) : $this->errorResponse('TESTIMONIAL_NOT_FOUND', $data);
    }

    public function contactSubmission(ContactCreateRequest $request)
    {
        $data = Contact::create($request->validated());
        return $data != null ? $this->successResponse('RESPONSE_RECEIVED_SUCCESSFULLY') : $this->errorResponse('RESPONSE_COULD_NOT_RECEIVED');
    }

    public function socialLinks()
    {
        $data = Settings::whereIn('key', ['facebook', 'messenger', 'youtube', 'email','android-url'])->get(['key', 'value', 'fa4_icon']);
        return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
    }

    public function faq()
    {
        $data = Faq::where('status', 1)->get(['title', 'body', 'id']);
        return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
    }
    public function halls()
    {
        $data = UserData::distinct()->get(['hall_name'])->pluck('hall_name');
        return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
    }

    public function pages()
    {
        $data = Page::where('status', 1)->get(['title', 'slug', 'id']);
        return $data != null ? $this->successResponse('LINKS_FOUND', $data) : $this->errorResponse('LINKS_NOT_FOUND', $data);
    }

    public function pageBySlug(string $slug)
    {
        $data = Page::where('slug', $slug)->where('status', 1)->get()->first();
        return $data != null ? $this->successResponse('PAGE_FOUND', $data) : $this->errorResponse('PAGE_NOT_FOUND', $data);
    }
}
