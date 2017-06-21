<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;
use Portfolio\Products;
use Portfolio\Category;
use Portfolio\Http\Requests;
use Portfolio\Http\Controllers\Controller;

class ProductsController extends Controller
{
     //atributo privado para a Products
    private $productsModel;
    
    
    //Metodo construtor
    public function __construct(Products $productsModel){
       
       $this->productsModel = $productsModel;
    }
    
    
    public function index(){
       $products = $this->productsModel->paginate(6);
       return view('products.index',compact('products'));
    }
    
    /*INJETA O OBJETO CATEGORY AUTOMATICAMENTE*/
    public function create(Category $category){
    
        //so preciso das informações abaixo e nao todos all()
        $categories = $category->lists('name', 'id');
        
        return view('products.create', compact('categories'));
    }
    
    public function store(Requests\ProductsRequest $request)
    {
        $input = $request->all();
        $products = $this->productsModel->fill($input);
        $products->save();
        return redirect()->route('products');
    }
    
    public function destroy($id){
        $this->productsModel->find($id)->delete();
        return redirect()->route('products');
    }
    
    public function edit($id, Category $category){
        
        $categories = $category->lists('name','id');
        
        $products = $this->productsModel->find($id);
        
//        $products = $this->productsModel->find($id);
//        return view('products.edit',compact('products'));
         return view('products.edit', compact('products','categories'));
    
        
    }
    public function update(Requests\ProductsRequest $request, $id){
        
        $this->productsModel->find($id)->update($request->all());
        return redirect()->route('products');
    } 
}
