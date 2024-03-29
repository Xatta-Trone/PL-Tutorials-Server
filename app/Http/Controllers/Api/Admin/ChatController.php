<?php

namespace App\Http\Controllers\Api\Admin;

use App\Events\SendMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChatCreateRequest;
use App\Models\Admin\Chat;
use App\Traits\ChatTrait;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    use ChatTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ChatCreateRequest $request)
    {
        $chat = Chat::create($request->validated());

        if ($chat) {
            event(new SendMessage($chat, $request->user_id));
            return response()->json(['message' => self::$MESSAGE_SENT,
                'status' => 'true',
                'chat' => $chat,
            ], 201);
        } else {
            return response()->json([
                'message' => self::$CHAT_CREATION_ERROR,
                'status' => 'false',
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $page = request()->get('page', 1);
        $per_page = request()->get('perpage', 10);


        $chat_data = Chat::where('user_id', $id)->skip(($page - 1) * $per_page)->withTrashed()->take($per_page)->orderBy('id', 'asc')->get();

        return response()->json([
            'message' => self::$CHAT_FOUND,
            'status' => 'true',
            'chat' => $chat_data,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Chat::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$CHAT_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }



        if ($post->delete()) {
            return response()->json([
                'message' => self::$CHAT_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$CHAT_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}