<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('categories')->count()==0){

         		DB::table('categories')->insert([
    			[
    				"id"=>1,
    			
    				'parent_id'=>2
    				

    			],
    			[
    				"id"=>2,
    			
    				'parent_id'=>2

    			],
    			[
    				"id"=>3,
    			
    				'parent_id'=>2

    			],


    		]);


         }  
    }
}
