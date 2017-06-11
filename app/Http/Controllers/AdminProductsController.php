<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;
use Portfolio\Http\Controllers\Controller;

use Portfolio\Products;

class AdminProductsController extends Controller
{

     private $products;
    
    /*  2º CRIEI O METODO CONSTRUTOR PARA INJETAR DIRETAMENTE NO METODO DA MANEIRA CORRETA*/
    public function __construct(Products $products){
        $this->middleware('guest');
        $this->products = $products;
        
    }
    
    public function index()
    {
        //
        $products = $this->products->all();
        return view('products', compact('products'));
    }

}
