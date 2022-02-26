<?php

namespace App\Http\Controllers\Api\User;

use App\Traits\ChatTrait;
use App\Models\Admin\Chat;
use Illuminate\Http\Request;
use App\Events\SendMessageToAdmin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChatCreateRequest;

class UserChatController extends Controller
{
    use ChatTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChatCreateRequest $request)
    {
        $chat = Chat::create($request->validated());

        if ($chat) {
            event(new SendMessageToAdmin($chat, $request->user()->name));
            return response()->json([
                'message' => self::$MESSAGE_SENT,
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $page = request()->get('page', 1);
        $per_page = request()->get('perpage', 10);


        $chat_data = Chat::where('user_id', request()->user()->id)->skip(($page - 1) * $per_page)->take($per_page)->orderBy('id', 'asc')->get();

        return response()->json($chat_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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