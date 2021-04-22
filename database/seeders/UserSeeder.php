<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	[
                'name'=>'Quan Ho',
                'phone'=>'0235984521',
                'email'=>'quanho1@gmail.com',
                'address'=>'Quang Tri',
                'password'=>'quanho123',
        	],
            [
                'name'=>'Tien Nguyen',
                'phone'=>'0235963521',
                'email'=>'tiennguyen@gmail.com',
                'address'=>'Da Nang',
                'password'=>'tiennguyen123',
        	],
            [
                'name'=>'Diu Hoang',
                'phone'=>'0232184521',
                'email'=>'diuhoang@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'diuhoang123',
        	],
            [
                'name'=>'Trang Tran',
                'phone'=>'0235979521',
                'email'=>'trangtran@gmail.com',
                'address'=>'Quang Binh',
                'password'=>'trangtran123',
        	]]);
    }
}