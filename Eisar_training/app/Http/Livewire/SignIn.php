<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SignIn extends Component
{
    public $email;
    public $password;

    public function submit()
    {
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        return redirect('/home');
    }
    public function render()
    {
        return view('livewire.sign-in');
    }
}
