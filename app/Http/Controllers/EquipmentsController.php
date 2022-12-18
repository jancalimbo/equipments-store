<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Equipments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EquipmentsController extends Controller
{
    public function index(){
        return view('pages.equipment.index');
    }
    public function uindex(){
        return view('pages.equipment.uindex');
    }
    public function create(){
        return view('pages.equipment.create');
    }
    public function delete($id){
        return view('pages.equipment.delete', compact('id'));
    }
    public function like($id){
        $equipment = Equipments::where('id', $id)->first();

        $equipment->update([
            'likes' => $equipment->likes +1,
        ]);

        return redirect('/equipments/uindex');
    }
    public function update($id){
        return view('pages.equipment.update', compact('id'));
    }
    public function addToCart($id){
        $equipment = Equipments::where('id', $id)->first();

        Cart::create([
            'user_id' => auth()->user()->id,
            'item' => $equipment->name,
            'code' => $equipment->code,
        ]);

        Alert::success('Added to cart');
        // Alert::success($equipment->name);
        return redirect(route('user-index'));
    }
    
}
