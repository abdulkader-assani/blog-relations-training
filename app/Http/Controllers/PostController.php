<?php

namespace App\Http\Controllers;

use App\Http\Resources\Postcollection;
use App\Http\Resources\PostResource;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function countriesPosts($countryId)
    {
        $country = Country::findOrFail($countryId);
        $posts = $country->posts()->get();
        return response()->json([
            'posts' => $posts,
        ]);
    }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $post = Post::paginate($perPage);
        return response()->json([
            'posts' => new Postcollection($post),
        ], 200);
    }

    public function store(Request $request)
    {
        // try {
            DB::beginTransaction();

            $post = new Post([
                'title' => $request->title,
                'text' => $request->text,
                // 'image' => $request->image,
                'user_id' => $request->user_id,
                'category_id' => $request->category_id,
                'tag_id' => $request->tag_id,
            ]);
            $post->save();
            $post->tags()->sync($request->tag_id);

            DB::commit();

            return response()->json([
                'message' => 'post creates',
                'post' => new PostResource($post),
            ], 200);
        // } catch (\Exception) {
        //     DB::rollback();

        //     return response()->json([
        //         "message" => "Failed to create post",
        //     ], 500);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
