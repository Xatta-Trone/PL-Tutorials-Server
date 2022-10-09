<?php

namespace App\Http\Controllers\Api\Admin;

use App\Traits\ImageTrait;
use App\Models\Admin\Reply;
use App\Traits\ContactTrait;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Mail\SendContactResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactReplyRequest;
use App\Http\Services\CustomVueTable2Service;

class ContactController extends Controller
{
    use ImageTrait, ContactTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Contact(), [
            'id', 'name', 'email', 'subject', 'created_at', 'status', 'replied'
        ], ['admin:id,name:foreign_key=replied_by']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactReplyRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Contact::find($id)->update(['replied_by' => auth()->id()]);
        $post = Contact::with(['replies.repliedby', 'admin'])->where('id', $id)->get()->first();
        if ($post) {
            return response()->json([
                'message' => self::$CONTACT_FOUND,
                'status' => 'true',
                'post' => $post,
            ], 200);
        }

        return response()->json([
            'message' => self::$CONTACT_NOT_FOUND,
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
    public function update(ContactReplyRequest $request, $id)
    {
        $post =  Reply::create(array_merge($request->validated(), ['replied_by' => auth()->id()]));

        Mail::to($request->input('mailto'))->send(new SendContactResponse($post));


        Contact::find($id)->update(['status' => 1, 'replied' => '1']);


        if ($post) {
            return response()->json([
                'message' => self::$CONTACT_REPLIED,
                'status' => 'true'
            ], 201);
        } else {
            return response()->json([
                'message' => self::$CONTACT_NOT_REPLIED,
                'status' => 'false'
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Contact::find($id);

        if ($post == null) {
            return response()->json([
                'message' => self::$CONTACT_NOT_FOUND,
                'status' => 'false',
            ], 422);
        }



        if ($post->delete()) {
            return response()->json([
                'message' => self::$CONTACT_DELETED,
                'status' => 'true',

            ], 200);
        }
        return response()->json([
            'message' => self::$CONTACT_NOT_DELETED,
            'status' => 'false',
        ], 422);
    }
}