<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            "name" => "nameTest",
            "icon" => "storage/photo-1.png",
            "category" => "storage",
            "price" => "priceTest",

        ]);

        DB::table('brands')->insert([
            "name" => "nameTest2",
            "icon" => "storage/photo-2.jpeg",
            "category" => "categoryTest2",
            "price" => "priceTest2",

        ]);
    }
}
