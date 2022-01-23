<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    protected $fillable = ['tea_name','tea_flavor_id','price','description','nature_category_id','city_id'];

    use HasFactory;

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function teaFlavor(){
        return $this->belongsTo(TeaFlavor::class);
    }

    public function natureCategory(){
        return $this->belongsTo(NatureCategory::class);
    }
}
