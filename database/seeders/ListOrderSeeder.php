<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ListOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('list_order')->insert([
        	[
                'product_id'=>1,
                'total_price'=>1000000
        	],
        	[
                'product_id'=>2,
                'total_price'=>2000000
            ],
        	[
                'product_id'=>3,
                'total_price'=>3000000
            ],
        	[
                'product_id'=>4,
                'total_price'=>4000000
            ],
        	[
                'product_id'=>5,
                'total_price'=>5000000
            ]
        ]);
    }
}
