<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar_zakat extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function muzzaki()
    {
        return $this->belongsTo(Muzzaki::class, 'muzzaki_id');
    }
}
