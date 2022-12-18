<?php

namespace App\Http\Livewire\Equipment;

use App\Models\Image;
use Livewire\Component;
use App\Models\Equipments;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;

class Create extends Component
{
    use WithFileUploads; 
    
    public $name, $stocks, $description, $image;

    public function add(){
        $this->validate([
            'name' => ['required','string',],
            'stocks' => ['required','integer',],
            'description' => ['nullable','string'],
            'image' => ['required'],
        ]);

        $equipment = Equipments::create([
            'name' => $this->name,
            'code' => strtoupper(Str::random(5)),
            'stocks' => $this->stocks,
            'likes' => 0,
            'user_id' => auth()->user()->id,
            'description' => $this->description,
        ]);


        foreach($this->image as $key => $image){
            $pimage = new Image();
            $pimage->code = $equipment->code;

            $imageName = now()->timestamp . $key . "." .$this->image[$key]->extension();
            $this->image[$key]->storeAs('all',$imageName);

            $pimage->image = $imageName;
            $pimage->save();
        }

        Alert::success($equipment->name, "was added to inventory");
        return redirect('/equipments/index');
        
    }
    public function render()
    {
        return view('livewire.equipment.create');
    }
}
