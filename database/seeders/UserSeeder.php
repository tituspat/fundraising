<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $adminRoleId = DB::table('ref_user_roles')->where('role', 'admin')->value('id');
        $mediaRoleId = DB::table('ref_user_roles')->where('role', 'media')->value('id');
        $modRoleId = DB::table('ref_user_roles')->where('role', 'mod')->value('id');
        $memberRoleId = DB::table('ref_user_roles')->where('role', 'member')->value('id');


        DB::table('users')->insert([
            [
                'name' => 'Admin Sahabat Tabanan',
                'email' => 'tim@atmagiri.com',
                'email_verified_at' => now(),
                'password' => bcrypt('timatmagiri831'),
                'role_id' => $adminRoleId,
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'tim media',
                'email' => 'mediatim@atmagiri.com',
                'email_verified_at' => now(),
                'password' => bcrypt('timatmagiri831'),
                'role_id' => $mediaRoleId,
                'role' => 'media',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'tim mod',
                'email' => 'modtim@atmagiri.com',
                'email_verified_at' => now(),
                'password' => bcrypt('timatmagiri831'),
                'role_id' => $modRoleId,
                'role' => 'mod',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'memberexample',
                'email' => 'membertim@atmagiri.com',
                'email_verified_at' => now(),
                'password' => bcrypt('timatmagiri831'),
                'role_id' => $memberRoleId,
                'role' => 'member',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
