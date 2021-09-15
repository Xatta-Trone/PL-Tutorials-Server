<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Traits\TestimonialTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialCreateRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Testimonial;
use App\Traits\UserTrait;

class TestimonialController extends Controller
{
    use TestimonialTrait, UserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Testimonial(), [
            'id', 'name', 'dept_batch', 'status', 'user_letter'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialCreateRequest $request)
    {
        $post =  Testimonial::create(array_merge($request->validated(), ['user_letter' => $this->userLetter($request->input('name'))]));


        if ($post) {
            return response()->json([
                'message' => self::$TESTIMONIAL_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$TESTIMONIAL_CREATION_ERROR,
                'status' => 'false'
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Testimonial::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$TESTIMONIAL_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$TESTIMONIAL_NOT_FOUND,
            'status' => 'false',
            'post' => null,
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdateRequest $request, $id)
    {
        $post = Testimonial::findOrFail($id);



        $post->update(array_merge($request->validated(), ['user_letter' => $this->userLetter($request->input('name'))]));
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$TESTIMONIAL_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$TESTIMONIAL_NOT_UPDATED,
            'status' => 'false',
        ], 422);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Testimonial::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$TESTIMONIAL_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }



        if ($post->delete()) {
            return response()->json([
                'message' => self::$TESTIMONIAL_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$TESTIMONIAL_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
