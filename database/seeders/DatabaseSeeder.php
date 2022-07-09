<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('posts')->insert([
	        [
			'title' => 'title 1',
			'slug'  => 'post-1',
			'text'  => 'text text text 1',
		],
		[
			'title' => 'title 2',
			'slug'  => 'post-2',
			'text'  => 'text text text 2',
		],
		[
			'title' => 'title 3',
			'slug'  => 'post-3',
			'text'  => 'text text text 3',
		],
	]);
    }
}
