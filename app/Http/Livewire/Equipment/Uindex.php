<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use App\Models\Equipments;

class Uindex extends Component
{
    public function loadEquipments(){
        $equipments = Equipments::orderBy('created_at', 'desc')->get();
        return compact('equipments');
    }
    public function render()
    {
        return view('livewire.equipment.uindex', $this->loadEquipments());
    }
}
