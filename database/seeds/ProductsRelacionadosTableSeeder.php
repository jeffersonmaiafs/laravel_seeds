<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/*No meu exemplo coloquei Products ao invés de Product da videoaula */
use Portfolio\Products;
use Faker\Factory as Faker;

class ProductsRelacionadosTableSeeder extends Seeder{
    
    public function run(){
        DB::table('products')->truncate();
        $faker = Faker::create();
        
        foreach(range(1,40) as $i){
            Products::create([
            'name'=>$faker->word(),
            'description' => $faker->sentence(),
            'prince' =>$faker->randomNumber(2),
            'category_id'=> $faker->numberBetween(1,15)    
        ]);
        
        }
        
      
    }
    
}
