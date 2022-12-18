<?php

namespace App\Models;

use App\Models\User;
use App\Models\Equipments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'item',
        'code'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function item(){
        return $this->hasMany('App\Models\Equipments');
    }
}
