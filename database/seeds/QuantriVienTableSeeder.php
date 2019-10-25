<?php

use Illuminate\Database\Seeder;

class QuantriVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'email'=>'nguyenphuong@gmail.com',
        		'password'=>bcrypt('phuong25111999'),
        		'ho_ten'=>'nguyen minh phuong',
        		'xoa'=>1
        	],
        	[
        		'email'=>'admin@gmail.com',
        		'password'=>bcrypt('admin'),
        		'ho_ten'=>'admin',
        		'xoa'=>1
        	],
            [
                'email'=>'vuong@gmail.com',
                'password'=>md5('123123'),
                'ho_ten'=>'vuong',
                'xoa'=>1
            ],
        ];


        DB::table('admin')->insert($data);
    }
}
