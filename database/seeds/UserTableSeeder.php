    <?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Portfolio\User;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserTableSeeder
 *
 * @author devje
 */
class UserTableSeeder extends Seeder{
    //put your code here
    

//use Faker\Factory as Faker;


    
    public function run(){
        //LIMPA A TABELA DE CATEGORIAS NO MOMENTO
        //OBS ELE LIMPA TODOS OS DADOS DA TABELA E INSERE ESTES NOVOS DADOS
        DB::table('users')->truncate();

               
       factory('Portfolio\User',100)->create();
      
    }
    
}

    

