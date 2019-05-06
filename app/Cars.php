<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Categories;
class Cars extends Model
{
	protected $fillable =['name','category_id','model','description','price','image'];
    public function category(){
    return $this->belongsTo('\App\Categories');

    }
}
