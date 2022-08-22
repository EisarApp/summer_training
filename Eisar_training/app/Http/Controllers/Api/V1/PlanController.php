<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends BaseController
{
    public function index()
    {
        $plans = Plan::all();
        return $this->sendResponse(PlanResource::collection($plans), 'plans retrieved successfully.');
    }

    public function show(Plan $plan)
    {
        return $this->sendResponse(new PlanResource($plan), 'plan retrieved successfully.');
    }
}
