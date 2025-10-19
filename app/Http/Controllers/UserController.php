<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserReasouce;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function countriesUsers($countryId)
    {
        $country = Country::findOrFail($countryId);
        $users = $country->users()->get();
        return response()->json([
            'users' => $users,
        ]);
    }
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return response()->json([
            'message' => 'user creates',
            'user' => new UserReasouce($user),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
