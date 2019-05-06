<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Cars;
class Categories extends Model
{
   protected $fillable = ['name', 'description'];

    public function car(){
    return $this->hasMany('\App\Cars','category_id');	

    }
    }
