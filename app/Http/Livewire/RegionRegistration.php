<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Region;

class RegionRegistration extends Component
{
    public $zone;
    public $regioncode;
    public $regionname;
    protected $rules = [
        'zone'=>'Nullable',
        'regioncode'=>'Nullable',
        'regionname'=>'Nullable'
    ];
    public function submit()
    {
        $validateData=$this->validate();
        Region::create($validateData);
        session()->flash('success','Data Registed Sucessfully');

    }
    public function render()
    {
        return view('livewire.region-registration')->layout('base');
    }
}
