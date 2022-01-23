<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureCategory extends Model
{
    protected $fillable = ['nature_category_name'];

    use HasFactory;

    public function tea(){
        return $this->hasMany(Tea::class);
    }
}
