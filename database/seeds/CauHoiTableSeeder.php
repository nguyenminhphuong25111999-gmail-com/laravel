<?php

use Illuminate\Database\Seeder;

class CauHoiTableSeeder extends Seeder
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
        		'noidung'=>'Truyện kiều của "Đại thi hào dân tộc" Nguyễn Du có bao nhiêu câu?',
        		'linh_vuc_id'=>'1',
        		'phuong_an_a'=>'3254 câu',
        		'phuong_an_b'=>'3452 câu',
        		'phuong_an_c'=>'3425 câu',
        		'phuong_an_d'=>'3524 câu',
        		'dap_an'=>'3254 câu'
        	],
        	[
        		'noidung'=>'Người đời gọi Nguyễn Du là gì?',
        		'linh_vuc_id'=>'1',
        		'phuong_an_a'=>'Danh nhân văn hóa kiệt xuất',
        		'phuong_an_b'=>'Nhà văn hóa kiệt xuất',
        		'phuong_an_c'=>'Đại thi hào dân tộc',
        		'phuong_an_d'=>'Nhà giáo lỗi lạc',
        		'dap_an'=>'Đại thi hào dân tộc'
        	],
            [
        		'noidung'=>'Đâu là bút danh của Nguyễn Du?',
        		'linh_vuc_id'=>'1',
        		'phuong_an_a'=>'Nguyễn Du',
        		'phuong_an_b'=>'Tố Như',
        		'phuong_an_c'=>'Tiều Ẩn',
        		'phuong_an_d'=>'Ức Trai',
        		'dap_an'=>'3254 câu'
        	],
        ];
        DB::table('CauHoi')->insert($data);
    }
}
