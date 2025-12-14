<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PostFactoryクラスで定義した内容にもとづいてダミーデータを5つ生成し、vendorsテーブルに追加する
        Post::factory()->count(5)->create();
    }
}
