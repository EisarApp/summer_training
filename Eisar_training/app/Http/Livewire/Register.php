<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    //Model Binding
    public $type;


    public function render()
    {
        return view('livewire.register');
    }
}
