<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'name' => 'Sandra',
                'email' => 'sandra@udenar.edu.co',
                'password'=> hash::make('123456'),
                'phone' => '3216088642',
                'ced' =>'2987654',
                'tipo' => 'Coordinador'
            ]
        ];
        DB::table('users')->insert($datos); 
    }
}
