<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Models\TrainingRequest;

class TrainingRequestController extends Controller
{
    public function create(Plan $plan)
    {
        return view('trainingRequest.create', [
            'plan' => $plan
        ]);
    }

    public function store(TrainingRequest $trainingRequest)
    {
        # create a training request for this student
    }
}
