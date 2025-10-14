<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Taggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $comment = new Comment([
            'text' => $request->text,
            // 'image' => $request->image,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'tag_id' => $request->tag_id,


        ]);
        $comment->save();
        $comment->tags()->sync($request->tag_id);



        DB::commit();

        return response()->json([
            'message' => 'comment creates',
            'comment' => new CommentResource($comment),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
