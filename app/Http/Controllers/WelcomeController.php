<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;
use Portfolio\Http\Controllers\Controller;
use Portfolio\Category;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /*  1º CRIEI O ATRIBUTO CATEGORIES*/
    private $categories;
    
    /*  2º CRIEI O METODO CONSTRUTOR PARA INJETAR DIRETAMENTE NO METODO DA MANEIRA CORRETA*/
    public function __construct(Category $category){
        $this->middleware('guest');
        $this->categories = $category;
        
    }
    
    public function index()
    {
        //
        return view('welcome');
        
    }
    
    public function exemplo()
    {
        //
        $categories = $this->categories->all();
        return view('exemplo', compact('categories'));
    }

}
