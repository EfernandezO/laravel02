<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Paises extends Component
{

    public $pais;
    public $paises=['Peru', 'Argentina', 'Chile', 'Bolivia'];
    public function render()
    {
        return view('livewire.paises');
    }

    public function agregar(){
        array_push($this->paises, $this->pais);
        $this->reset('pais');
    }
}
