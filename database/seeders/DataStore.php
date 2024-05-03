<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Illuminate\Support\Str;

class DataStore extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 20; $i++){
            DB::table('table_store')->insert([
                'name' => 'Cửa Hàng '.$i,
                'address' => '15/'.$i.' Trần Bình Trọng',
                'sdt' => random_int(1000000000,9999999999),
                'email' => Str::random(20).$i.'@gmail.com'
            ]);
        }       
    }
}
