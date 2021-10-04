<?php

namespace App\Http\Livewire;
use App\Models\SKU;

use Livewire\Component;

class SKURegister extends Component
{
    public $skuid;
    public $skucode;
    public $skuname;
    public $mrp;
    public $distributedprice;
    public $weight;
    protected $rules = [
        'skuid'=>'required',
        'skucode'=>'required',
        'skuname'=>'required',
        'mrp'=>'required',
        'distributedprice'=>'required',
        'weight'=>'required'
    ];

    public function submit()
    {
        $validateData=$this->validate();
        SKU::create($validateData);
        session()->flash('success','Data Registed Sucessfully');
    }
    public function render()
    {
        return view('livewire.s-k-u-register')->layout('base');
    }
}
