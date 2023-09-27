<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Saiful',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'role_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Shaon',
            'email' => 'controller@gmail.com',
            'password' => Hash::make('controller@gmail.com'),
            'role_id' => 2
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'Controller',
        ]);
        DB::table('roles')->insert([
            'name' => 'Examinee',
        ]);
    }
}
