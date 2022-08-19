<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserAcademic;
use App\Models\University;
use App\Models\Department;

class UniversityRegister extends Component
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
    // public $university;
    // public $department;

    //drop-down properties uni-dep
    public $university;
    public $departments = [];
    public $department;



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
        ]);
        UserAcademic::create([
            'user_id' =>$user_uni->id,
            'university_id' => $this->university,
            'department_id' => $this->department,
        ]);


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
