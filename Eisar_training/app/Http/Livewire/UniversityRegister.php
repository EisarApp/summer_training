<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserAcademic;
use App\Models\University;
use App\Models\Department;

class UniversityRegister extends Component
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
    public $universityId;
    public $departmentId;


    //drop-down properties uni-dep
    public $university;
    public $departments = [];
    public $department;

    //Model Binding
    public $type;

    private $validationRules = [

        'firstName' => ['required', 'min:3'],
        'lastName' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8'],
        'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],

    ];

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    // }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);


        User::create([
            'name' => "{$this->firstName} {$this->lastName}",
            'type_id' => $this->type_id,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'gender' => $this->gender,
            'mobile' => $this->mobile,
        ]);
        UserAcademic::create([
            'user_id' => User::foreignId('id'),
            'university_id' => $this->universityId,
            'department_id' => $this->departmentId,
        ]);

        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        if (!empty($this->university)) {
            $this->departments = Department::where('university_id', $this->university)->get();
        }
        $universities = University::orderBy('name')->get();

        return view('livewire.university-register')->with([
            'universities' => $universities,
        ]);
    }
}
