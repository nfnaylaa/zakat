<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Mustahiq extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function Mustahiq(){
        return $this->hasMany(Mustahiq::class);
    }
}
