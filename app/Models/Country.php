<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country_name'];

    use HasFactory;

    public function city(){
        return $this->hasMany(City::class);
    }
}
