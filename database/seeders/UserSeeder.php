<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Back-End Admin',
            'email' => 'admin@test.com',
            'user_type' => 'back-end',
            'password' => Hash::make('admin@123')
        ],
        
        [
            'name' => 'Front-End User',
            'email' => 'gunvantsinh@test.com',
            'user_type' => 'front-end',
            'password' => Hash::make('test@123'),
        ]
        ]);
        
    }
}
