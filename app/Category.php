<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','description'];
    
    //este método retorna todos os produtos relacionados à categoria
    public function products(){
        return $this->hasMany('Portfolio\Products');
    }
    
}
