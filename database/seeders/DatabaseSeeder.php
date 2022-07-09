<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
		'title' => Str::random(10),
		'slug'  => Str::random(10),
		'text'  => Str::random(50),
           ],
           [
                'title' => Str::random(10),
                'slug'  => Str::random(10),
                'text'  => Str::random(50),
           ],
           [
                'title' => Str::random(10),
                'slug'  => Str::random(10),
                'text'  => Str::random(50),
           ],
	]);
    }
}
