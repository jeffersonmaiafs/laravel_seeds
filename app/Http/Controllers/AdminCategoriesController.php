<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;
use Portfolio\Http\Controllers\Controller;
use Portfolio\Category;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    private $categories;
    
    /*  2º CRIEI O METODO CONSTRUTOR PARA INJETAR DIRETAMENTE NO METODO DA MANEIRA CORRETA*/
    public function __construct(Category $category){
        $this->middleware('guest');
        $this->categories = $category;
        
    }
    
    public function index()
    {
        //
        $categories = $this->categories->all();
        return view('categories', compact('categories'));
    }
    
   
    
}
