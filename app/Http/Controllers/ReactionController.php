<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReactionResource;
use App\Models\Reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReactionController extends Controller
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
        try {
            DB::beginTransaction();

            $reaction = Reaction::create([
                'name' => $request->name,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'reaction creates',
                'reaction' => new ReactionResource($reaction),
            ], 200);
        } catch (\Exception) {
            DB::rollback();

            return response()->json([
                "message" => "Failed to create reaction",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reaction $reaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reaction $reaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reaction $reaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaction $reaction)
    {
        //
    }
}
