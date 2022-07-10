<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->insert([
                       [
			'name' => Str::random(10),
			'email' => Str::random(10).'@gmail.com',
                       ],
                       [
                        'name' => Str::random(10),
                        'email' => Str::random(10).'@gmail.com',
                       ],
                       [
                        'name' => Str::random(10),
                        'email' => Str::random(10).'@gmail.com',
                       ],
                       [
                        'name' => Str::random(10),
                        'email' => Str::random(10).'@gmail.com',
                       ],
                       [
                        'name' => Str::random(10),
                        'email' => Str::random(10).'@gmail.com',
                       ],
	        ]);
	}
}
