<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('comments')->count()==0){

         		DB::table('comments')->insert([
    			[
    				"id"=>1,
    			
    				'user_id'=>2,
    				'product_id' => 1,
    				'content' => "yuasudaispdoasopduaoudosad"
    				

    			],
    			[
    				"id"=>2,
    			
    				'user_id'=>2,
    				'product_id' => 1,
    				'content' => "yuasudaispdoasopduaoudosad"

    			],
    			[
    				"id"=>3,
    			
    				'user_id'=>2,
    				'product_id' => 1,
    				'content' => "yuasudaispdoasopduaoudosad"

    			],


    		]);


         }  
             }
}
