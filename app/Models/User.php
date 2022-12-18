<?php

namespace App\Models;

use App\Models\Log;
use App\Models\Cart;
use App\Models\Equipments;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role', 
        'password',
        'remember_token' ,
    ];

     /* The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }

    public function logs(){
        return $this->hasMany(Log::class);   
    }

    public static function byCategory($category_id){
        return User::whereHas('posts', function ($query) use($category_id){
            $query->where('category_id', $category_id);
        })->orderBy('username')->get();
    }


    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function equipment(){
        return $this->hasMany(Equipments::class);
    }
}
