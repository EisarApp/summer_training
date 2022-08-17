<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\City;
use App\Models\Region;
use App\Models\University;
use App\Models\Department;

class CompanyRegister extends Component
{
    // Form properties
    public $firstName;
    public $lastName;
    public $type_id;
    public $email;
    public $password;
    public $confirmPassword;
    public $gender;
    public $mobile;


    //drop-down properties region-city
    public $region;
    public $cities = [];
    public $city;

    //drop-down properties uni-dep
    public $university;
    public $departments = [];
    public $department;




    //Model Binding
    public $trainerType;

    // private $validationRules = [
    //     1 => [
    //         'firstName' => ['required', 'min:3'],
    //         'lastName' => ['required', 'min:3'],
    //         'email' => ['required', 'email', 'unique:users,email'],
    //     ],
    //     2 => [
    //         'password' => ['required', 'string', 'min:8'],
    //         'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
    //     ],
    // ];


    public function render()
    {
        if (!empty($this->region)) {
            $this->cities = City::where('region_id', $this->region)->get();
        }
        if (!empty($this->university)) {
            $this->departments = Department::where('university_id', $this->university)->get();
        } 
        
        $regions = Region::orderBy('name')->get();
        $universities = University::orderBy('name')->get();
        return view('livewire.company-register')->with([
            'regions' => $regions,
            'universities'=>$universities,
        ]);
    }
}
