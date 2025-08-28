<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $sensorId;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function mount($id)
    {
        $sensor = Sensor::find($id);

        if ($sensor == null) {
            return redirect()->route('sensor.index');
        }
        $this->sensorId = $sensor->id;
        $this->sensorId = $sensor->id;
        $this->codigo = $sensor->codigo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->status;
    }

    public function salvar()
    {
        $sensor = Sensor::find($this->sensorId);

        $sensor->update([
            'codigo' => $this->codigo,
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
        return view('livewire.sensor.sensor-edit',  compact('ambientes'));
    }
}
