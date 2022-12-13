<?php

namespace App\Http\Controllers;

use App\Models\Equipments;
use Illuminate\Http\Request;

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
    
}
