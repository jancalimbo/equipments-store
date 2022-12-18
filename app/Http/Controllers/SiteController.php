<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Equipments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiteController extends Controller
{
    public function logs(){
        $logs = auth()->user()->logs;
        return view('logs', compact('logs'));
    }
    public function home(){
       return view('pages.site.home');
    }
    public function cart(){
        $items = Cart::where('user_id', auth()->user()->id)->get();
        
       return view('pages.site.cart', compact('items'));
    }

    public function checkout(){
        $items = Cart::where('user_id', auth()->user()->id)->get();

        foreach ($items as $item) {
            $item->delete();
        } 
        
        Alert("Items checked out successfully");
        return redirect(route('cart'));
    }
}
