<?php

namespace App\Http\Controllers\Api\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqCreateRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Faq;
use App\Traits\FaqTrait;

class FaqController extends Controller
{
    use FaqTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('faq_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new Faq(), [
            'id', 'title', 'status',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCreateRequest $request)
    {
        if (!request()->user()->hasPermission('faq_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  Faq::create($request->validated());
        $this->saveAdminActivity('added', $post->id, 'faq', $post->title, ['oldData' => null, 'newData' => $post->toArray()]);



        if ($post) {
            return response()->json([
                'message' => self::$FAQ_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$FAQ_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('faq_show')) {
            return  $this->noPermissionResponse();
        }

        $post = Faq::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$FAQ_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$FAQ_NOT_FOUND,
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
    public function update(FaqUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('faq_update')) {
            return  $this->noPermissionResponse();
        }

        $post = Faq::findOrFail($id);

        $postOld =  $post->replicate();

        $post->update($request->validated());
        $this->saveAdminUpdateActivity($post->id, 'faq', $post->title, $postOld, $post->getChanges());

        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$FAQ_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$FAQ_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('faq_delete')) {
            return  $this->noPermissionResponse();
        }
        $post = Faq::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$FAQ_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'faq', $post->title, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$FAQ_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$FAQ_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}