<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'mod',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'member',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('ref_user_roles')->insert($roles);
    }
}
