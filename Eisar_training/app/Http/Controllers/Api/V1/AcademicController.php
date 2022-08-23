<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\UserAcademic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\V1\AcademicResource;

class AcademicController extends BaseController
{
    public function index()
    {
        $academic = UserAcademic::all();
        return $this->sendResponse(AcademicResource::collection($academic), 'academic retrieved successfully.');
    }

    public function show(UserAcademic $academic)
    {
        return $this->sendResponse(new AcademicResource($academic), 'academi retrieved successfully.');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => ['required', 'min:3'],
            'lastName' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
            'gender' => ['required'],
            'mobile' => ['required', 'min:10'],
            'university' => ['required', 'not_in:none'],
            'department' => ['required', 'not_in:none'],
            'userType' => ['required'],
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $user = User::create([
            'name' => $input['firstName'] . ' ' . $input['lastName'],
            'type_id' => $input['userType'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'gender' => $input['gender'],
            'mobile' => $input['mobile'],
            'is_active' => 1,
        ]);
        
        UserAcademic::create([
            'user_id' => $user->id,
            'university_id' => $input['university'],
            'department_id' => $input['department'],
        ]);

        $success['token'] =  $user->createToken('academic')->plainTextToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }
}
