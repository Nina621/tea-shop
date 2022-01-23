<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeaFlavor extends Model
{
    protected $fillable = ['flavor_name'];

    use HasFactory;

    public function tea(){
        return $this->hasMany(Tea::class);
    }
}
