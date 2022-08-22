<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $this->sendResponse(UserResource::collection($users), 'users retrieved successfully.');
    }

    public function show(User $user)
    {
        return $this->sendResponse(new UserResource($user), 'user retrieved successfully.');

    }
}
