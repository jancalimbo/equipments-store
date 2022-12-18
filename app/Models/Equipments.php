<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipments extends Model
{
    use HasFactory;

    protected $table = 'equipments';

    protected $fillable = [
        'name',
        'user_id',
        'code',
        'description',
        'stocks',
        'likes',
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
