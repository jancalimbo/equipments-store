<?php

namespace App\Http\Livewire\Equipment;

use Livewire\Component;
use App\Models\Equipments;

class Update extends Component
{
    public $equipmentId;
    public $name, $stocks, $description;

    public function getEquipmentProperty(){
        return Equipments::find($this->equipmentId);
    }

    public function saveChanges(){
        $this->validate([
            'name' => ['string'],
            'stocks' => ['integer'],
            'description' => ['string', 'nullable'],
        ]);

        $this->equipment->update([
            'name' => $this->name,
            'description' => $this->description,
            'stocks' => $this->stocks,
        ]);

        return redirect(route('admin-index'));
    }

    public function render()
    {
        return view('livewire.equipment.update');
    }
}
