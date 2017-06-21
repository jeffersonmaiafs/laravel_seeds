<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = ['category_id','name','description','prince','featured','recommend'];
    
    
    //este método retorna a categoria de um produto
    public function category(){
        return $this->belongsTo('Portfolio\Category');
    }
    
}
