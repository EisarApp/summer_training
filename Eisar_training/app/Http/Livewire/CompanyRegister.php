<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\City;
use App\Models\Region;
use App\Models\University;
use App\Models\Department;
use App\Models\UserCompany;

class CompanyRegister extends Component
{
    //parameter 
    public $userType;

    
    // Form properties
    public $firstName;
    public $lastName;
    public $type_id;
    public $email;
    public $password;
    public $confirmPassword;
    public $gender;
    public $mobile;
    public $logo;
    public $header;
    public $description;
    public $domain;
    public $facility_size;

    //drop-down properties region-city
    public $region;
    public $cities = [];
    public $city;

    //Model Binding
    public $trainerType;

    public function submit()
    {
        $user_uni=User::create([
            'name' => "{$this->firstName} {$this->lastName}",
            'type_id' => $this->userType,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'gender' => $this->gender,
            'mobile' => $this->mobile,
            'is_active'=>1,
            'university_id' => $this->universityId,
            'department_id' => $this->departmentId,
        ]);
        UserCompany::create([
            'user_id' =>$user_uni->id,
            'logo' => $this->logo,
            'header' => $this->header,
            'description' => $this->description,
            'domain' => $this->domain,
            'city_id' => $this->city,
            'region_id' => $this->region,
            'facility_size' => $this->facility_size,
        ]);
    }

    public function render()
    {
        if (!empty($this->region)) {
            $this->cities = City::where('region_id', $this->region)->get();
        }
    
        $regions = Region::orderBy('name')->get();
        return view('livewire.company-register')->with([
            'regions' => $regions,
        ]);
    }
}
