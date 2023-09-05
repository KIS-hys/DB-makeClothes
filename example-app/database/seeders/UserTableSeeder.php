<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "first_name"=>"Takahiro",
            "last_name"=>"Kou",
            "nickname"=>"Taka",
            "address"=>"Tokyo",
            "email"=>"Taka@social-db.co.jp",
            "password"=>"123",
        ]);
    }
}
