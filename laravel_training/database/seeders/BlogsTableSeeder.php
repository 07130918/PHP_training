<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog::factory()->count(15)->create();
    }
}
