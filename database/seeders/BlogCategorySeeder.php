<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [
                'category' => 'blog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'program',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('ref_blog_categories')->insert($categories);
    }
}
