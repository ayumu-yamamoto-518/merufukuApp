<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追加

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーの初期データを作成 (create _users _tableのカラムを順番通りに列挙する、でないとエラーが出る）
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john.da@example.com',
            'password_hash' => bcrypt('password_hash'),
            'admin' => 1, //一般ユーザー:0 管理ユーザー:1
            'is_active' => 0, //利用中:0　未登録、退会済み:1
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}




