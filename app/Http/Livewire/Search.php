<?php

namespace App\Http\Livewire;

use App\Places;
use Livewire\Component;

class Search extends Component
{

    public $search;
    // public $data= array();
    // public $newData= array();
    protected $updatesQueryString = ['search'];

    public function mount(){
        $this->search = request()->query('search',$this->search);
    }

    public function render()
    {

        // $this->data = Places::all()->toArray();
        return view('livewire.search',[
            'items'=>Places::where('name','like','%'.$this->search.'%')->get()
        ]);
    }

    // public function getData(){
    //     // $s = '%'.$this->search.'%';
    //     $s = $this->search;
    //     // $this->data = Places::where('name','like','kjhkj')->toSql();
    //     // $this->data = Places::where('name','like','%'.$this->search.'%')->get();
    //     // $this->data = Places::all();
    //     if($s != ''){
    //         $this->newData = array_filter($this->data,function($item)use($s){
    //             // var_dump($item['name'],$s);
    //             return strpos($item['name'], $s);
    //         });
    //     }else{
    //         $this->newData = array();
    //     }
        
    // }

}
