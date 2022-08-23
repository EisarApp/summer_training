<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class LoginController extends BaseController
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();

        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']])) {
            $user = Auth::user();
            switch ($user->type_id) {
                case 1:
                    $success['token'] =  $user->createToken('Eisar', ['trainee'])->plainTextToken;
                    break;
                case 2:
                    $success['token'] =  $user->createToken('Eisar', ['academic'])->plainTextToken;
                    break;
                case 3:
                    $success['token'] =  $user->createToken('Eisar', ['company'])->plainTextToken;
                    break;
            }
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        $success['name'] =  auth()->user()->name;
        return $this->sendResponse($success, 'User logout successfully.');
    }
}
