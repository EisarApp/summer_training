<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\UserEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PlanController extends Controller
{
    public function store()
    {

        $attributes = $this->validatePlan();


        Plan::create($attributes);

        return redirect('/');
    }

    public function edit(Plan $plan)
    {
        return view('plan.edit', [
            'employees' => UserEmployee::all(),
            'plan' => $plan
        ]);
    }

    public function update(Plan $plan)
    {

        $attributes = $this->validatePlan();

        $plan->update($attributes);

        return redirect('/');
    }

    protected function validatePlan()
    {

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
            'require_national_id' => 'required',
        ]);
    }

    public function destroy(Plan $plan)
    {
        
        $plan->delete();
        return back();
    }
}
