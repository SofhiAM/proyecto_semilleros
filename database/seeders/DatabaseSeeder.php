<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Suppo0rt\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Sandra',
            'email' => 'sandra12@udenar.edu.co',
            'password' => Hash::make('123456'),
            'phone' => '3123453421',
            'ced'=> '27654234',
            'tipo'=>'Coordinador'
        ]);
    }
}
