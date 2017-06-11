<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Portfolio\Products;
//use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder{
    
    public function run(){
        //LIMPA A TABELA DE CATEGORIAS NO MOMENTO
        //OBS ELE LIMPA TODOS OS DADOS DA TABELA E INSERE ESTES NOVOS DADOS
 DB::table('products')->truncate();
//        $faker=Faker::create();
//        
//        foreach(range(1,100) as $i){
//        Category::create([
//            'name'=> $faker->word(),
//            'description'=>$faker->sentence()
//        ]);
//        
//        }
//        
        //DAQUI EM DIANTE É COM FACTORIES
        factory('Portfolio\Products',300)->create();
        
        
        
        
      
    }
    
}
