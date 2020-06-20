<?php

namespace App\Http\Livewire;

use App\Places;
use Livewire\Component;

class Search extends Component
{

    public $search = '';
    public $data;

    public function render()
    {
        return view('livewire.search');
    }

    public function getData(){
        $this->data = Places::where('name','LIKE','%{$this->search}%');
    }

}
