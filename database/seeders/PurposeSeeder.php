<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('purposes')->insert([
        	[
                'title'=>'Tiệc sinh nhật',
                'avatar'=>'/public/image/sinhnhat.jpg',
        	],
        	[
                'title'=>'Tiệc tân gia',
                'avatar'=>'/public/image/main2.jpg',
            ],
        	[
                'title'=>'Tiệc cuối năm',
                'avatar'=>'/public/image/endyear.jpg',
            ],
        	[
                'title'=>'Tiệc đám giỗ chạp',
                'avatar'=>'/public/image/gio.jpg',
            ],
            [
                'title'=>'Tiệc cuối năm',
                'avatar'=>'/public/image/endyear.jpg',
            ]
        ]);
    }
}
