<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','description'];
    
    //este m�todo retorna todos os produtos relacionados � categoria
    public function products(){
        return $this->hasMany('Portfolio\Products');
    }
    
}
