<?php

namespace App\Http\Controllers\Api\Admin;

use App\Traits\BookTrait;
use App\Models\Admin\Book;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Http\Services\CustomVueTable2Service;

class BookController extends Controller
{
    use ImageTrait, BookTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!request()->user()->hasPermission('book_show')) {
            return $this->noIndexPermissionResponse();
        }

        $vs = new CustomVueTable2Service();
        return  $vs->get(new Book(), [
            'id', 'name', 'author', 'status', 'user_id',
        ], ['admin:id,name:foreign_key=user_id']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookCreateRequest $request)
    {
        if (!request()->user()->hasPermission('book_create')) {
            return  $this->noPermissionResponse();
        }

        $post =  Book::create(array_merge($request->validated(), ['image' => $this->upload(), 'user_id' => auth()->id(), 'user_type' => 'admin']));

        $this->saveAdminActivity('added', $post->id, 'book', $post->name, ['oldData' => null, 'newData' => $post->toArray()]);


        if ($post) {
            return response()->json([
                'message' => self::$BOOK_CREATED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$BOOK_CREATION_ERROR,
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
        if (!request()->user()->hasPermission('book_show')) {
            return  $this->noPermissionResponse();
        }
        $post = Book::find($id);
        if ($post) {
            return response()->json([
                'message' => self::$BOOK_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$BOOK_NOT_FOUND,
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
    public function update(BookUpdateRequest $request, $id)
    {
        if (!request()->user()->hasPermission('book_update')) {
            return  $this->noPermissionResponse();
        }
        $post = Book::findOrFail($id);
        $postOld =  $post->replicate();

        $post->update(array_merge($request->validated(), ['image' => $this->updateimage(), 'user_id' => auth()->id(), 'user_type' => 'admin']));

        $this->saveAdminUpdateActivity($post->id, 'book', $post->name, $postOld, $post->getChanges());
        // dd($post);
        if ($post) {
            return response()->json([
                'message' => self::$BOOK_UPDATED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BOOK_NOT_UPDATED,
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
        if (!request()->user()->hasPermission('book_delete')) {
            return  $this->noPermissionResponse();
        }

        $post = Book::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$BOOK_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }

        if ($post->image) {
            $this->deleteimage($post->image, $post->post_type);
        }
        $postOld =  $post->replicate();

        $this->saveAdminDeleteActivity($post->id, 'book', $post->name, $postOld);

        if ($post->delete()) {
            return response()->json([
                'message' => self::$BOOK_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$BOOK_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}