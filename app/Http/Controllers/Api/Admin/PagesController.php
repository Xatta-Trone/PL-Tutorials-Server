<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageCreateRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Page;
use App\Traits\PageTrait;

class PagesController extends Controller
{
    use PageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Page(), [
            'id', 'title', 'slug', 'status',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageCreateRequest $request)
    {
        $post =  Page::create($request->validated());


        if ($post) {
            return response()->json([
                'message' => self::$PAGE_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$PAGE_CREATION_ERROR,
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
        $post = Page::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$PAGE_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$PAGE_NOT_FOUND,
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
    public function update(PageUpdateRequest $request, $id)
    {
        $post = Page::findOrFail($id);

        $post->update($request->validated());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$PAGE_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$PAGE_NOT_UPDATED,
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
        $post = Page::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$PAGE_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }



        if ($post->delete()) {
            return response()->json([
                'message' => self::$PAGE_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$PAGE_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}
