<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\UserCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\V1\CompanyResource;
use App\Http\Resources\V1\CompanyCollection;

class CompanyController extends BaseController
{
    public function index()
    {

        $companies = UserCompany::all();
        return $this->sendResponse(CompanyResource::collection($companies), 'Companies retrieved successfully.');
    }

    public function show(UserCompany $company)
    {
        return $this->sendResponse(new CompanyResource($company), 'Companies retrieved successfully.');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
            'gender' => ['required', 'in:f,m'],
            'mobile' => ['required', 'min:10'],
            'logo' => ['required'],
            'header' => ['required'],
            'description' => ['required'],
            'domain' => ['required'],
            'facility_size' => ['required'],
            'region' => ['required', 'not_in:none'],
            'city' => ['required', 'not_in:none'],
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = User::create([
            'name' =>  $input['name'],
            'type_id' =>  $input['userType'],
            'email' =>  $input['email'],
            'password' =>  $input['password'],
            'gender' =>  $input['gender'],
            'mobile' =>  $input['mobile'],
            'is_active' => 1,
        ]);

        UserCompany::create([
            'user_id' => $user->id,
            'logo' =>  $request->file('logo')->store('files', 'public'),
            'header' =>  $request->file('header')->store('files', 'public'),
            'description' => $input['description'],
            'domain' => $input['domain'],
            'city_id' => $input['city'],
            'region_id' => $input['region'],
            'facility_size' => $input['facility_size'],
        ]);

        $success['token'] =  $user->createToken('company', ['company'])->plainTextToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }
}
