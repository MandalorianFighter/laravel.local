<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
        public function run()
        {
               DB::table('articles')->insert([
			'title' => 'title 1',
			'text'  => 'text text text 1',
		]);
        }
}
