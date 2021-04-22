<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        	[
                'name_product'=>'Loa Jamo C93 (Bookshelf)',
                'picture'=>'public/image/Speaker/Loa Jamo C93 (Bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
            [
                'name_product'=>'Loa to',
                'picture'=>'public/image/Speaker/loa2.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
            [
                'name_product'=>'Loa Nhật',
                'picture'=>'public/image/Speaker/loa3.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
            [
                'name_product'=>'Loa điện tử',
                'picture'=>'public/image/Speaker/loa4.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
            [
                'name_product'=>'Loa chữ V hot',
                'picture'=>'public/image/Speaker/loa5.png',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
        	[
                'name_product'=>'Bạch tuộc cay',
                'picture'=>'public/image/food_content/bachtuotcay.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
        	[
                'name_product'=>'Đồ trang trí cấp 1',
                'picture'=>'public/image/trangtri/tri1.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
        	[
                'name_product'=>'Bàn ghế loại 1',
                'picture'=>'public/image/Table/ban1.jpeg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>2
            ],
        	[
                'name_product'=>'Bánh kem loại 1',
                'picture'=>'public/image/Cake/cake1.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ],
            [
                'name_product'=>'Loa Jamo C93',
                'picture'=>'public/image/Speaker/Loa Jamo C93.PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
        	[
                'name_product'=>'Chân gà sốt Thái',
                'picture'=>'public/image/food_content/changasotthai.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
        	[
                'name_product'=>'Đồ trang trí cấp 2',
                'picture'=>'public/image/trangtri/tri2.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
        	[
                'name_product'=>'Bàn ghế loại 2',
                'picture'=>'public/image/Table/ban2.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>2
            ],
        	[
                'name_product'=>'Bánh kem loại 2',
                'picture'=>'public/image/Cake/cake3.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ],
            [
                'name_product'=>'Loa Jamo C100 ',
                'picture'=>'public/image/Speaker/loa1.jpg',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
        	[
                'name_product'=>'Tôm hấp xa lá chanh',
                'picture'=>'public/image/food_content/tom-hap-xa-la-chanh.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
        	[
                'name_product'=>'Đồ trang trí cấp 3',
                'picture'=>'public/image/trangtri/tri4.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
            [
                'name_product'=>'Đồ trang trí cấp 5',
                'picture'=>'public/image/trangtri/tri5.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
            [
                'name_product'=>'Đồ trang trí cấp 6',
                'picture'=>'public/image/trangtri/tri6.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
            [
                'name_product'=>'Đồ trang trí cấp 7',
                'picture'=>'public/image/trangtri/tri7.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
            [
                'name_product'=>'Đồ trang trí cấp 8',
                'picture'=>'public/image/trangtri/tri8.png',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
        	[
                'name_product'=>'Bàn ghế loại 3',
                'picture'=>'public/image/Table/ban5.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>2
            ],
        	[
                'name_product'=>'Bánh kem loại 3',
                'picture'=>'public/image/Cake/cake5.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ],
            [
                'name_product'=>'Loa Klipsch RB 81II (bookshelf)',
                'picture'=>'public/image/Speaker/Loa Klipsch RB 81II (bookshelf).PNG',
                'price'=>100000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>1
        	],
        	[
                'name_product'=>'Gỏi ngô sen hoa chuối tai heo',
                'picture'=>'public/image/food_content/goi_ngo_sen_hoa_chuoi_tai_heo.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
        	[
                'name_product'=>'Đồ trang trí cấp 4',
                'picture'=>'public/image/trangtri/tri3.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>4
            ],
        	[
                'name_product'=>'Bàn ghế loại 4',
                'picture'=>'public/image/Table/ban4.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>2
            ],
            [
                'name_product'=>'Chim cút nướng',
                'picture'=>'public/image/food_content/chimcutnuong.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
            [
                'name_product'=>'Gà cay',
                'picture'=>'public/image/food_content/gacay.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
            [
                'name_product'=>'Lẩu bò',
                'picture'=>'public/image/food_content/lau-bo.png',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
            [
                'name_product'=>'Lẩu cá hồi',
                'picture'=>'public/image/food_content/lau-ca-hoi.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>5
            ],
        	[
                'name_product'=>'Bánh kem loại 4',
                'picture'=>'public/image/Cake/cake4.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ],
            [
                'name_product'=>'Bánh kem loại 5',
                'picture'=>'public/image/Cake/cake6.png',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ],
            [
                'name_product'=>'Bánh kem loại 6',
                'picture'=>'public/image/Cake/cake7.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ],
            [
                'name_product'=>'Bánh kem loại 7',
                'picture'=>'public/image/Cake/cake8.jpg',
                'price'=>200000,
                'discount'=>0,
                'description'=>'Great',
                'category_id'=>3
            ]
        ]);
    }
}
