<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(UserInfo::all());
    }

    public function store(Request $request)
    {
        $user = UserInfo::create([
            'fullname' => $request->fullname,
            'age' => $request->age,
        ]);

        return response()->json($user, 201);
    }
}
