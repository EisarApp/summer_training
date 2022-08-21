<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\City;
use App\Models\UserTrainee;
use App\Models\Region;
use App\Models\University;
use App\Models\Department;
use Livewire\WithFileUploads;

class TraineeRegister extends Component
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
        'gender' => ['required', 'in:f,m'],
        'mobile' => ['required', 'min:10'],
        'major' => ['required'],
        'studentNumber' => ['required'],
        'gpa_type' => ['required', 'in:4,5'],
        'gpa' => ['required'],
        'graduation_year' => ['required'],
        'trainingHours' => ['required'],
        'training_date' => ['required', 'in:firstsemester,secondsemester,thirdsemester,summersemester'],
        'academic_transaction' => ['required'],
        'cv' => ['required'],
        'graduation_certificate' => ['required_if:traineeType,==,2'],
        'academic_degree' => ['required', 'in:bachelor,diploma'],
        'region' => ['required', 'not_in:none'],
        'city' => ['required', 'not_in:none'],
        'university' => ['required', 'not_in:none'],
        'department' => ['required', 'not_in:none'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules);
    }

    public function submit()
    {
        // ddd($this);
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
            'major' => $this->major,
            'student_number' => $this->studentNumber,
            'gpa' => $this->gpa,
            'gpa_type' => $this->gpa_type,
            'training_date' => $this->training_date,
            'training_hours' => $this->trainingHours,
            'graduation_year' => $this->graduation_year,
            'academic_degree' => $this->academic_degree,
            'graduation_certificate' => $this->check(),
            'academic_transaction' => $this->academic_transaction->store('files', 'public'),
            'cv' => $this->cv->store('files', 'public'),
            'is_graduate' => $this->traineeType
        ]);
        $this->reset();
        $this->resetValidation();
        return redirect('/');

    }
    public function check()
    {
        if ($this->traineeType == 2) {
            return $this->graduation_certificate->store('files', 'public');
        }
    }

    public function checkValidation()
    {
        if ($this->traineeType == 2) {
            return ['required'];
        }
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
