<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Models\TrainingRequest;

class TrainingRequestController extends Controller
{
    public function show()
    {
        return view('trainingRequest.show', [
            'requests' => auth()->user()->userTrainee->trainingRequests
        ]);
    }
    public function create(Plan $plan)
    {
        return view('trainingRequest.create', [
            'plan' => $plan
        ]);
    }

    public function store()
    {
        TrainingRequest::create([
            'user_id' => auth()->id(),
            'created_by' => auth()->id(),
            'status' => 'inprocess',
            'notes' => 'لا يوجد ملاحظات',
            'plan_id' => request()->plan_id
        ]);

        return redirect('trainingRequest');
    }
}
