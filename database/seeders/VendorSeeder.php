<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vendors')->insert([
        	[
                'fullname'=>'Nhà hàng Cua Biển',
                'phonenumber'=>'0998289355',
                'address'=>'99 To Hien Thanh, Da Nang',
                'email'=>'nhahangcuabien@gmail.com',
                'avatar'=>'/public/image/logonhahang.jpg',
                'open_time'=>'10 AM:22 PM',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'password'=>'nhahangcuabien',
                'purpose_id'=>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
        	],
        	[
                'fullname'=>'Nhà hàng Hồng Phúc',
                'phonenumber'=>'0998289355',
                'address'=>'99 To Hien Thanh, Da Nang',
                'email'=>'hongphuc@gmail.com',
                'avatar'=>'/public/image/hongphuc.jpg',
                'open_time'=>'10 AM:22 PM',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'password'=>'hongphuc',
                'purpose_id'=>2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'fullname'=>'Nhà hàng Lê Gia 3',
                'phonenumber'=>'0998289355',
                'address'=>'99 To Hien Thanh, Da Nang',
                'email'=>'legia3@gmail.com',
                'avatar'=>'/public/image/legia3.jpg',
                'open_time'=>'10 AM:22 PM',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'password'=>'legia3',
                'purpose_id'=>3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'fullname'=>'Nhà hàng Cơm Niêu Nồi Đất',
                'phonenumber'=>'0998289355',
                'address'=>'99 To Hien Thanh, Da Nang',
                'email'=>'comnieunoidat@gmail.com',
                'avatar'=>'/public/image/nieu.jpg',
                'open_time'=>'10 AM:22 PM',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'password'=>'comnieunoidat',
                'purpose_id'=>4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'fullname'=>'Nhà hàng Ớt Xanh',
                'phonenumber'=>'0998289355',
                'address'=>'99 To Hien Thanh, Da Nang',
                'email'=>'otxanh@gmail.com',
                'avatar'=>'/public/image/otxanh.jpg',
                'open_time'=>'10 AM:22 PM',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'password'=>'otxanh',
                'purpose_id'=>5,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        	[
                'fullname'=>'Nhà hàng Phú Gia 3',
                'phonenumber'=>'0998289355',
                'address'=>'99 To Hien Thanh, Da Nang',
                'email'=>'phugia3@gmail.com',
                'avatar'=>'/public/image/phugia3.jfif',
                'open_time'=>'10 AM:22 PM',
                'description'=>'Phục vụ tận nơi - thân thiện',
                'password'=>'phugia3',
                'purpose_id'=>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]]);
    }
}
