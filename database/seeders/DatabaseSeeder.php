<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(MisiSeeder::class);
        $this->call(ContentSeeder::class);

    }
}
