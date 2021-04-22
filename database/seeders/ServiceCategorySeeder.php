<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_category')->insert([
        	[
                'name_category'=>'Loa máy',
                'avatar'=>'/public/image/Speaker/loa1.jpg',
                'description' => 'Chào các bạn: trong hệ thống nghe nhìn có lẽ loa và micro là bộ phận kém phát triển nhất. Ra đời từ hơn 100 năm qua thật sự nó chẳng có thay đổi gì đang kể. Nó gần như là 1 huyền thoại, mọi người nói về nó rất nhiều nhưng kết quả thường rất mông lung.'
        	],
        	[
                'name_category'=>'Bàn ghế',
                'avatar'=>'/public/image/Table/ban1.jpeg',
                'description' => 'Ra đời với sứ mệnh tạo nên không gian hợp gu và hiệu quả với khách hàng, từ đó tạo nên sức mạnh cạnh tranh bền vững cho chính khách hàng và Phong Cách Mộc.'
            ],
        	[
                'name_category'=>'Bánh kem',
                'avatar'=>'/public/image/Cake/cake3.jpg',
                'description' =>'Bánh kem là một loại bánh chứa đầy sự êm ái, nhẹ nhàng và sáng tạo.'
            ],
        	[
                'name_category'=>'Vật dụng trang trí',
                'avatar'=>'/public/image/trangtri/tri3.jpg',
                'description' =>'Có rất nhiều vật dụng trang trí độc lạ xinh xắn, với rất nhiều mức giá và nhiều mực độ cao thấp khác nhau.'
            ],
        	[
                'name_category'=>'Thức ăn',
                'avatar'=>'/public/image/trangtri/tri3.jpg',
                'description' =>'Nhắc đến Ẩm thực Việt, rất nhiều Đầu bếp nổi tiếng phải trầm trồ vì sự đa dạng, phong phú, nhiều màu sắc.'
            ]
        ]);
    }
}
