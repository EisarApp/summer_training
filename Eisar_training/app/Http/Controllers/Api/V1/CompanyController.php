<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CompanyCollection;
use App\Http\Resources\V1\CompanyResource;
use App\Models\UserCompany;
use Illuminate\Support\Facades\Auth;

class CompanyController extends BaseController
{
    public function index()
    {

        $companies = UserCompany::all();
        return $this->sendResponse(CompanyResource::collection($companies), 'Companies retrieved successfully.');
    }

    public function show(UserCompany $company)
    {
        return $this->sendResponse(new CompanyResource($company), 'Companies retrieved successfully.');
    }
}
