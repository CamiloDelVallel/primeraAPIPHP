<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return response()->json(User::all(), 200);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show(string $id)
    {
        return response()->json(User::find($id), 200);
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id)->update($request->all());
        return response()->json($user, 200);
    }

    public function destroy(string $id)
    {
        $user = User::find($id)->delete();
        return response()->json($user, 200);
    }
}
