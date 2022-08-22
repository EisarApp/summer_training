<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TraineeResource;
use App\Models\UserTrainee;
use Illuminate\Http\Request;

class TraineeController extends BaseController
{
    public function index()
    {
        $trainees = UserTrainee::all();
        return $this->sendResponse(TraineeResource::collection($trainees), 'Trainees retrieved successfully.');
    }

    public function show(UserTrainee $trainee)
    {
        return $this->sendResponse(new TraineeResource($trainee), 'Trainee retrieved successfully.');
    }
}
