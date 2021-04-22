<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->insert([
        	[
                'user_id'=>1,
                'vendor_id'=>1,
                'order_time'=>'2021-02-25 08:00',
                'address'=>'101 Lê Hữu Trác',
                'quantity_mam'=>10
        	],
        	[
                'user_id'=>2,
                'vendor_id'=>2,
                'order_time'=>'2021-01-12 08:00',
                'address'=>'101 Lê Hữu Trác',
                'quantity_mam'=>5
            ],
        	[
                'user_id'=>3,
                'vendor_id'=>3,
                'order_time'=>'2020-12-25 08:00',
                'address'=>'101 Lê Hữu Trác',
                'quantity_mam'=>7
            ],
        	[
                'user_id'=>4,
                'vendor_id'=>4,
                'order_time'=>'2020-11-20 08:00',
                'address'=>'101 Lê Hữu Trác',
                'quantity_mam'=>20
            ],
        	[
                'user_id'=>1,
                'vendor_id'=>5,
                'order_time'=>'2020-10-20 08:00',
                'address'=>'101 Lê Hữu Trác',
                'quantity_mam'=>10
            ]
        ]);
    }
}
