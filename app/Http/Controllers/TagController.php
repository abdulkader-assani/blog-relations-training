<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $tag = Tag::paginate($perPage);
        return response()->json(new TagCollection($tag), 200);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $tag = Tag::create([
                'name' => $request->name,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'tag creates',
                'tag' => new TagResource($tag),
            ], 200);
        } catch (\Exception) {
            DB::rollback();

            return response()->json([
                "message" => "Failed to create tag",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
