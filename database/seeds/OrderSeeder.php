<?php

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
        DB::table('order')->delete();
        DB::table('order')->insert([
            ['id'=>1,'full_name'=>'Nguyễn Tuấn Long', 'address'=>'Hà Nội', 'phone'=>'0339054040', 'total'=>1900000, 'state'=>1],
            ['id'=>2,'full_name'=>'Nguyễn Trường Sơn', 'address'=>'Hà Nam', 'phone'=>'0293054040', 'total'=>500000, 'state'=>1],
            ['id'=>3,'full_name'=>'Nguyễn Văn Thắng', 'address'=>'Thái Bình', 'phone'=>'0331929292', 'total'=>1700000, 'state'=>1],
            ['id'=>4,'full_name'=>'Trần Đình An', 'address'=>'Hà Nội', 'phone'=>'0309528192', 'total'=>1600000, 'state'=>1],
            ['id'=>5,'full_name'=>'Trần Bá Mạnh', 'address'=>'Hà Nội', 'phone'=>'0309528192', 'total'=>900000, 'state'=>1]
        ]);
    }
}
