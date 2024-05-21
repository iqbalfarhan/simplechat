<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = "iqbalfarhan1996@gmail.com";
    public $password = "adminoke";

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($valid)) {
            $this->redirect(route('home'), true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
