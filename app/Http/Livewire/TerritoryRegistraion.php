<?php

namespace App\Http\Livewire;
use App\Models\Territory;

use Livewire\Component;

class TerritoryRegistraion extends Component
{
    public $zone;
    public $region;
    public $territorycode;
    public $territoryname;
    protected $rules = [
        'zone'=>'Nullable',
        'region'=>'Nullable',
        'territorycode'=>'Nullable',
        'territoryname'=>'Nullable'
    ];
    public function submit()
    {
        $validateData=$this->validate();
        Territory::create($validateData);
        session()->flash('success','Data Registed Sucessfully');

    }
    public function render()
    {
        return view('livewire.territory-registraion')->layout('base');
    }
}
