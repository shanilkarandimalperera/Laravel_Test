<?php

namespace App\Http\Livewire;
use App\Models\UserRegister;

use Livewire\Component;

class UserRegistration extends Component
{
    public $name;
    public $nic;
    public $address;
    public $mobile;
    public $email;
    public $gender;
    public $territory;
    public $username;
    public $password;
    protected $rules = [
        'name'=>'required',
        'nic'=>'required',
        'address'=>'required',
        'mobile'=>'required',
        'email'=>'required|email',
        'gender'=>'Nullable',
        'territory'=>'Nullable',
        'username'=>'required',
        'password'=>'required'
    ];

    public function submit()
    {
        $validateData=$this->validate();
        UserRegister::create($validateData);
        session()->flash('success','Data Registed Sucessfully');
    }
    public function render()
    {
        return view('livewire.user-registration')->layout('base');
    }
}
