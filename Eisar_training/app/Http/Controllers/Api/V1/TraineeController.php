<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Models\UserTrainee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\V1\TraineeResource;

class TraineeController extends BaseController
{
    public function index(Request $request)
    {
        // if ($request->user()->tokenCan('academic')) {
        if ($request->major != null) {
            $trainees = UserTrainee::all()->where('major', $request->major);
        } else {
            $trainees = UserTrainee::all();
        }
        return $this->sendResponse(TraineeResource::collection($trainees), 'Trainees retrieved successfully.');
        // } else {
        // return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        // }
    }

    public function show(UserTrainee $trainee)
    {
        return $this->sendResponse(new TraineeResource($trainee), 'Trainee retrieved successfully.');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'confirmPassword' => 'required|string|same:password|min:8',
            'gender' => 'required|in:f,m',
            'mobile' => 'required|min:10',
            'major' => 'required',
            'studentNumber' => 'required',
            'gpa_type' => 'required|in:4,5',
            'gpa' => 'required',
            'graduation_year' => 'required',
            'trainingHours' => 'required',
            'training_date' => 'required|in:firstsemester,secondsemester,thirdsemester,summersemester',
            'academic_transaction' => 'required',
            'cv' => 'required',
            'graduation_certificate' => 'required_if:traineeType,==,2',
            'academic_degree' => 'required|in:bachelor,diploma',
            'region' => 'required|not_in:none',
            'city' => 'required|not_in:none',
            'university' => 'required|not_in:none',
            'department' => 'required|not_in:none',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();

        $user = User::create([
            'name' => $input['firstName'] . ' ' . $input['lastName'],
            'type_id' => $input['userType'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'gender' => $input['gender'],
            'mobile' => $input['mobile'],
            'is_active' => 1,
        ]);
        UserTrainee::create([
            'user_id' => $user->id,
            'region_id' => $input['region'],
            'city_id' => $input['city'],
            'university_id' => $input['university'],
            'department_id' => $input['department'],
            'major' =>  $input['major'],
            'student_number' =>  $input['studentNumber'],
            'gpa' =>  $input['gpa'],
            'gpa_type' =>  $input['gpa_type'],
            'training_date' =>  $input['training_date'],
            'training_hours' =>  $input['trainingHours'],
            'graduation_year' =>  $input['graduation_year'],
            'academic_degree' => $input['academic_degree'],
            'graduation_certificate' => $this->check($input['traineeType'], $request),
            'academic_transaction' => $request->file('academic_transaction')->store('files', 'public'),
            'cv' => $request->file('cv')->store('files', 'public'),
            'is_graduate' => $input['isGraduate'],

        ]);



        $success['token'] =  $user->createToken('trainee', ['trainee'])->plainTextToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }
    public function check($traineeType, Request $request)
    {
        if ($traineeType == 2) {
            return $request->file('graduationCertificate')->store('files', 'public');
        }
    }
}
