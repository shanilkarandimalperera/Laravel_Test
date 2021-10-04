<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\zone;

class ZoneRegistration extends Component
{
    public $zonecode;
    public $zonelong;
    public $zoneshort;
    protected $rules = [
        'zonecode'=>'required',
        'zonelong'=>'Nullable',
        'zoneshort'=>'Nullable'
    ];
    public function submit()
    {
        $validateData=$this->validate();
        zone::create($validateData);
        session()->flash('success','Data Registed Sucessfully');

    }
    public function render()
    {
        return view('livewire.zone-registration')->layout('base');
    }
}
