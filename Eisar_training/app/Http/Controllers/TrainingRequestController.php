<?php

namespace App\Http\Controllers;

use App\Models\TrainingRequest;
use Illuminate\Http\Request;

class TrainingRequestController extends Controller
{
    public function create()
    {
        return view('trainingRequest.create');
    }

    public function store(TrainingRequest $trainingRequest)
    {
        # create a training request for this student
    }
}
