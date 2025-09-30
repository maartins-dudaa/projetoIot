<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $temperatura;
    public $luminosidade;
    public $umidade;
    public $ultimoRegistro;

    public $labelsTempertura =  [];
    public $dadosTemperatura = [];

    public function mount(){
        $this->carregarDados();
    }

    public function carregarDados(){

    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
