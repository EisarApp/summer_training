<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\City;
use App\Models\UserTrainee;
use App\Models\Region;
use App\Models\University;
use App\Models\Department;

class TraineeRegister extends Component
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
    public $major;
    public $studentNumber;
    public $gpa_type;
    public $gpa;
    public $graduation_year;
    public $trainingHours;
    public $training_date;
    public $academic_transaction;
    public $cv;
    public $graduation_certificate;
    public $academic_degree;

    //drop-down properties region-city
    public $region;
    public $cities = [];
    public $city;

    //drop-down properties uni-dep
    public $university;
    public $departments = [];
    public $department;

    //Model Binding
    public $traineeType;

    private $validationRules = [
        'firstName' => ['required', 'min:3'],
        'lastName' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8'],
        'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        'gender' => ['required'],
        'mobile' => ['required', 'min:10'],
        'major' => ['required'],
        'studentNumber' => ['required'],
        'studentNumber' => ['required'],
        'gpa_type' => ['required'],
        'gpa' => ['required'],
        'graduation_year' => ['required'],
        'trainingHours' => ['required'],
        'training_date' => ['required'],
        'academic_transaction' => ['required'],
        'cv' => ['required'],
        'graduation_certificate' => ['required'],
        'academic_degree' => ['required'],
        'region' => ['required'],
        'city' => ['required'],
        'university' => ['required'],
        'department' => ['required'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules);
    }

    public function submit()
    {
        $this->validate($this->validationRules);

        $user_uni = User::create([
            'name' => "{$this->firstName} {$this->lastName}",
            'type_id' => $this->userType,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'gender' => $this->gender,
            'mobile' => $this->mobile,
            'is_active' => 1,
        ]);
        UserTrainee::create([
            'user_id' => $user_uni->id,
            'region_id' => $this->region,
            'city_id' => $this->city,
            'university_id' => $this->university,
            'department_id' => $this->department,
            'student_number' => $this->studentNumber,
            'gpa' => $this->gpa,
            'gpa_type' => $this->gpa_type,
            'training_date' => $this->training_date,
            'training_hours' => $this->trainingHours,
            'graduation_year' => $this->graduation_year,
            'academic_degree' => $this->academic_degree,
            'graduation_certificate' => $this->graduation_certificate,
            'academic_transaction' => $this->academic_transaction,
            'cv' => $this->cv,
            'is_graduate' => $this->traineeType,
        ]);
    }

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
        return view('livewire.trainee-register')->with([
            'regions' => $regions,
            'universities' => $universities,
        ]);
    }
}
