<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use App\Models\Equipments;
use RealRashid\SweetAlert\Facades\Alert;

class Uindex extends Component
{
    public function loadEquipments(){
        $equipments = Equipments::orderBy('created_at', 'desc')->get();
        return compact('equipments');
    }

    public function like(){

       Alert($this->equipment->id);

       return redirect('equipments/uindex');
    }
    public function render()
    {
        return view('livewire.equipment.uindex', $this->loadEquipments());
    }
}
