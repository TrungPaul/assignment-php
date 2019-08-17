<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         if(DB::table('users')->count()==0){

         		DB::table('users')->insert([
    			[
    				"id"=>4,
    				'fistname' => "Nguyen",
    				'lastname' => "trung",
    				'email'=>"trung@gmail.com",
    				 'password' => bcrypt(123456),
    				'address' => "Nam Dinh",
    				'birthday' => '1999/04/02',
    				'is_active' => '1'

    			],
    			[
    				"id"=>2,
    				'fistname' => "Nguyen",
    				'lastname' => "trang",
    				'email'=>"trang@gmail.com",
    				 'password' => bcrypt(123456),
    				'address' => "ha noi",
    				'birthday' => '1999/04/02',
    				'is_active' => '0'

    			],
    			[
    				"id"=>3,
    				'fistname' => "Pham",
    				'lastname' => "trung",
    				'email'=>"trung1@gmail.com",
    				 'password' => bcrypt(123456),
    				'address' => "HN",
    				'birthday' => '1999/04/02',
    				'is_active' => '1'

    			],


    		]);


         }
    }
}
