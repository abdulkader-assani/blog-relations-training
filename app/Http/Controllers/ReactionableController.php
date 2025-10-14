<?php

namespace App\Http\Controllers;

use App\Models\Reactionable;
use App\Http\Resources\ReactionableResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReactionableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reactionable = Reactionable::create([
            'reaction_id' => $request->reaction_id,
            'user_id' => Auth::user()->id,
            'reactionable_id' => $request->reactionable_id,
            'reactionable_type' => $request->reactionable_type,
        ]);
        return response()->json([
            'message' => 'reactionable creates',
            'reactionable' => new ReactionableResource($reactionable),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reactionable $reactionable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reactionable $reactionable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reactionable $reactionable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reactionable $reactionable)
    {
        //
    }
}
