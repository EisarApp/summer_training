<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PlanResource;
use App\Models\Plan;
use App\Models\UserCompany;
use Illuminate\Http\Request;

class PlanController extends BaseController
{
    public function index(Request $request)
    {
        $plans = Plan::where('company_id', $request->company)->get();
        return $this->sendResponse(new PlanResource($plans), 'plans retrieved successfully.');
    }

    // public function show(Plan $plan)
    // {
    //     return $this->sendResponse(new PlanResource($plan), 'plan retrieved successfully.');
    // }
    public function show(Request $request)
    {
        $plan = Plan::where('company_id', $request->company)->where('id', $request->plan)->get();
        return $this->sendResponse(new PlanResource($plan), 'plan retrieved successfully.');
    }
}
