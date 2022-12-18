<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use App\Models\Equipments;
use RealRashid\SweetAlert\Facades\Alert;

class Delete extends Component
{
    public $equipmentId;

    public function delete(){
        $eqpmt = Equipments::where('id', $this->equipmentId)->first();

        $eqpmt->delete();

        Alert::info('Equipment deleted');
        return redirect(route('admin-index'));
    }
    public function render()
    {
        return view('livewire.equipment.delete');
    }
}
