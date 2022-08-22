<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\UserCompany;
use App\Models\UserEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PlanController extends Controller
{
    public function index(UserCompany $company)
    {
        return view('companyPlan.index', [
            'plans' => Plan::latest()->filter(request(['search']))->get(),
            'company'=>$company
           
        ]);
    }

    public function show(UserCompany $company)
    {
        return view('companyPlan.index', ['plans' => Plan::all()->where('company_id', $company->id)
   
    ]);
    }

    public function create(UserCompany $company)
    {
        return view('companyPlan.create', [
            'employees' => UserEmployee::all()->where('company_id', $company->id),
            'company' => $company
        ]);
    }

    public function store(UserCompany $company)
    {
        $attributes = $this->validatePlan();
        Plan::create($attributes);
        return redirect("admin/$company->id/plans");
    }

    public function edit(Plan $plan)
    {
        return view('companyPlan.edit', [
            'employees' => UserEmployee::all()->where('company_id', $plan->company_id),
            'plan' => $plan
        ]);
    }

    public function update(Plan $plan)
    {
        $attributes = $this->validatePlan();
        $plan->update($attributes);
        return redirect("admin/$plan->company_id/plans");
    }

    protected function validatePlan()
    {
        request()->merge([
            'require_training_letter' => request()->get('require_training_letter') == null ? 0 : 1,
            'require_national_id' =>  request()->get('require_national_id') == null ? 0 : 1
        ]);

        return request()->validate([
            'name' => 'required',
            'created_by' => 'required',
            'supervisor_id' => 'required',
            'company_id' => 'required',
            'description' => 'required',
            'department' => 'required',
            'training_type' => 'required',
            'training_method' => 'required',
            'students_number' => 'required',
            'starting_time' => 'required',
            'students_number' => 'required',
            'ending_date' => 'required',
            'require_training_letter' => 'required',
            'require_national_id' => 'required'
        ]);
    }

    public function delete(Plan $plan)
    {
        $plan->delete();
        return back();
    }
}
