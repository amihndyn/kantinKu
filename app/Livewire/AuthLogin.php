<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthLogin extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

    public function login()
    {
        $this->validate();

        $credentials = ['password' => $this->password];

        // Cek apakah input email atau NIM
        if (filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $this->username;
        } else {
            $credentials['nim'] = $this->username;
        }

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            
            // Redirect berdasarkan role dari user langsung
            if (Auth::user()->role === 'admin') {
                return $this->redirect('/dashboard', navigate: true);
            } else {
                return $this->redirect('/products', navigate: true);
            }
        }

        $this->addError('username', 'NIM/Email atau password salah.');
    }

    public function render()
    {
        return view('livewire.auth-login');
    }
}