<?php

namespace App\Http\Livewire\frontend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Login extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $company;
    public $isLoading = false;

    public $emailLogin;
    public $passwordLogin;


    public function mount()
    {
        if (auth()->user()) {
            return redirect()->to(route('profile'));
        }
    }

    public function login()
    {
        $this->isLoading = true;

        $validated = $this->validate([
            'emailLogin' => 'required|email',
            'passwordLogin' => 'required'
        ]);

        if (Auth::guard('web')->attempt(['email' => $validated['emailLogin'], 'password' => $validated['passwordLogin']])) {
            $this->emitTo('notification', 'notify', ['type' => 'success', 'content' => trans('login_success')]);
            $this->isLoading = false;
            return redirect()->intended();
        }

        $this->isLoading = false;
        $this->emitTo('notification', 'notify', ['type' => 'error', 'content' => trans('no_user')]);
    }

    public function register()
    {
        $this->isLoading = true;

        $validated = $this->validate([
            'name' => 'required | string',
            'email' => 'unique:App\Models\User,email',
            'password' => 'required | string | confirmed',
            'company' => 'required | string'
        ]);

        if (User::where('email', $validated['email'])->first()) {
            $this->emitTo('notification', 'notify', ['type' => 'error', 'content' => trans('user_exists')]);
        }

        if (User::create($validated)) {

            if (Auth::guard('web')->attempt(['email' => $validated['email'], 'password' => $validated['password']])) {

                $this->isLoading = false;
                $this->emitTo('notification', 'notify', ['type' => 'success', 'content' => trans('user_registered')]);
                return redirect()->intended();
            }
        }
    }

    public function render()
    {
        return view('livewire.frontend.login')->extends('layouts.app');
    }
}
