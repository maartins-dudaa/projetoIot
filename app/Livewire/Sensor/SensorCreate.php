<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;


        protected $rules = [
            'codigo' => 'unique:sensors',
            'tipo' => 'required',
            'status' => 'required',
    ];

     protected $messages = [
        'codigo.unique' => 'Esse código já está cadastrado',
        'tipo.required' => 'Esse campo é obrigatório',
        'status' => 'esse campo é obrigatório'
    ];

    public function store(){
          $this->validate();

        Sensor::create([
            'codigo'=>$this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'ambiente_id' => $this->ambiente_id
        ]);

          return redirect()->route('sensor.index');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }
}
