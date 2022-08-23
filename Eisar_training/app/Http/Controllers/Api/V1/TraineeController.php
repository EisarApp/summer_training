<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\UserTrainee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\V1\TraineeResource;

class TraineeController extends BaseController
{
    public function index(Request $request)
    {
        if($request->major!=null){
            $trainees = UserTrainee::all()->where('major',$request->major);
        }
        else{
         $trainees = UserTrainee::all();   
        }
        return $this->sendResponse(TraineeResource::collection($trainees), 'Trainees retrieved successfully.');
    }

    public function show(UserTrainee $trainee)
    {
        return $this->sendResponse(new TraineeResource($trainee), 'Trainee retrieved successfully.');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => ['required', 'min:3'],
            'lastName' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
            'gender' => ['required', 'in:f,m'],
            'mobile' => ['required', 'min:10'],
            'major' => ['required'],
            'studentNumber' => ['required'],
            'gpa_type' => ['required', 'in:4,5'],
            'gpa' => ['required'],
            'graduation_year' => ['required'],
            'trainingHours' => ['required'],
            'training_date' => ['required', 'in:firstsemester,secondsemester,thirdsemester,summersemester'],
            'academic_transaction' => ['required'],
            'cv' => ['required'],
            'graduation_certificate' => ['required_if:traineeType,==,2'],
            'academic_degree' => ['required', 'in:bachelor,diploma'],
            'region' => ['required', 'not_in:none'],
            'city' => ['required', 'not_in:none'],
            'university' => ['required', 'not_in:none'],
            'department' => ['required', 'not_in:none'],
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $user = UserTrainee::create($input);
        $success['token'] =  $user->createToken('trainee')->plainTextToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }
}
