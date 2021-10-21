<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
                'id'       => 1,
                'name'     => 'Abdullah Yousuf',
                'email'    => 'abdullah@gmail.com',
                'password' => Hash::make('admin'),
                'domain'   => 'system',
                'role'     => 'system',
                'weight'   => 99.00,
                'status'   => 1
            ],
            [
                'id'       => 2 ,
                'name'     => 'Shah Md. Iktakhairul Islam',
                'email'    => 'iktakhairul@gmail.com',
                'password' => Hash::make('admin'),
                'domain'   => 'developer',
                'role'     => 'developer',
                'weight'   => 89.00,
                'status'   => 1
            ],
            [
                'id'       => 3,
                'name'     => 'Md. Arafat',
                'email'    => 'arafat@gamil.com',
                'password' => Hash::make('admin'),
                'domain'   => 'merchant',
                'role'     => 'merchant',
                'weight'   => 99.00,
                'status'   => 1
            ],
        ]);
    }
}
