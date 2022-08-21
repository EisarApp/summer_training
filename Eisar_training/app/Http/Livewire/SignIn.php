<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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


        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            throw ValidationException::withMessages([
                'email' => 'unvalid email or password'
            ]);
        }

        session()->regenerate();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.sign-in');
    }
}
