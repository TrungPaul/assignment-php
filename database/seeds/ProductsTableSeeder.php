<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          if(DB::table('products')->count()==0){

         		DB::table('products')->insert([
    			[
    				"id"=>1,
    				'name' => "iphone",
    				
    				'description'=>"cccccccc",
    				'cate_id' => 1,
    				'price' => 123456,
    				'sale_percent'=>654321,
    				'stocks'=>'cali',
    				'is_active' => '1'

    			],
    			[
    				"id"=>2,
    				'name' => "iphone",
    				'description'=>"cccccccc",
    				'cate_id' => 3,
    				'price' => 123456,
    				'sale_percent'=>654321,
    				'stocks'=>'cali',
    				'is_active' => '1'

    			],
    			[
    				"id"=>3,
    				'name' => "iphone",
    				
    				'description'=>"cccccccc",
    				'cate_id' => 1,
    				'price' => 123456,
    				'sale_percent'=>654321,
    				'stocks'=>'cali',
    				'is_active' => '1'

    			],


    		]);


         }  

           }
}
