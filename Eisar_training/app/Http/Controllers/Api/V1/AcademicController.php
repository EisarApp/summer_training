<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AcademicResource;
use App\Models\UserAcademic;
use Illuminate\Http\Request;

class AcademicController extends BaseController
{
    public function index()
    {
        $academic = UserAcademic::all();
        return $this->sendResponse(AcademicResource::collection($academic), 'academic retrieved successfully.');
    }

    public function show(UserAcademic $academic)
    {
        return $this->sendResponse(new AcademicResource($academic), 'academi retrieved successfully.');
    }
}
