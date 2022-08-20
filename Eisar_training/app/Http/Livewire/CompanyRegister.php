<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\City;
use App\Models\Region;
use App\Models\UserCompany;
use Livewire\WithFileUploads;


class CompanyRegister extends Component
{
    use WithFileUploads;
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

    

    private $validationRules = [
        'firstName' => ['required', 'min:3'],
        'lastName' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8'],
        'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        'gender' => ['required', 'in:f,m'],
        'mobile' => ['required', 'min:10'],
        'logo' => ['required'],
        'header' => ['required'],
        'description' => ['required'],
        'domain' => ['required'],
        'facility_size' => ['required'],
        'region' => ['required','not_in:none'],
        'city' => ['required', 'not_in:none'],
    ];

    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules);
    }

    public function submit()
    {
        $this->validate($this->validationRules);

        $user_company=User::create([
            'name' => "{$this->firstName} {$this->lastName}",
            'type_id' => $this->userType,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'gender' => $this->gender,
            'mobile' => $this->mobile,
            'is_active'=>1,
        ]);
        UserCompany::create([
            'user_id' =>$user_company->id,
            'logo' => $this->logo->store('files', 'public'),
            'header' => $this->header->store('files', 'public'),
            'description' => $this->description,
            'domain' => $this->domain,
            'city_id' => $this->city,
            'region_id' => $this->region,
            'facility_size' => $this->facility_size,
        ]);
        $this->reset();
        $this->resetValidation();
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
