<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\QueryException;

use App\Livewire\Traits\ValidateSessionTrait;

#[Lazy]
class LoginComponent extends Component
{

    #[Validate('required', message: 'No hay usuario ingresado')]
    public $username;
    #[Validate('required', message: 'No hay contraseña ingresada')]
    public $password;

    public function mount(){

    }

    public function authenticate(){
        $this->validate();

        try{

            $this->redirectRoute('dashboard', navigate:true);


            // session()->flash('error', 'Credenciales inválidas. Por favor, intente de nuevo.');
            $this->reset(array_keys($this->all()));

        } catch (QueryException $e) {
            dd($e);
        }
    }

    public function placeholder()
    {
        return view('livewire.auth.placeholder');
    }
    
    public function render()
    {
        return view('livewire.auth.login-component');
    }
}
