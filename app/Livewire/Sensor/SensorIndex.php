<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorIndex extends Component
{

    use WithPagination;

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public $sensorId;

    public function render()
    {
        $sensores = Sensor::where('codigo', 'like', "%{$this->search}%")
        ->orWhere('tipo', 'like', "%{$this->search}%")
        ->orWhere('ambiente_id', 'like', "%{$this->search}%")
            ->orWhere('descricao', 'like', "%{$this->search}%")
            ->orWhere('status', 'like', "%{$this->search}%")
           
            ->paginate($this->perPage);


        return view('livewire.sensor.sensor-index', compact('sensores'));
    }
}
