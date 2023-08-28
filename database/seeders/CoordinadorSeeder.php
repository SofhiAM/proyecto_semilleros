<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;

class CoordinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'id_coordinador'=>'2190',
                'nom_coordinador' => 'Sandra Marcela Guerrero',
                'dir_coordinador' =>'Pasto,Nariño',
                'tel_coordinador' =>'3105273727',
                'correo_coordinador' =>'marcela1396@udenar.edu.co',
                'gen_coordinador' => 'F',
                'foto_coordinador' => 'Sandra.jpg',
                'prog_coordinador' => 'Ingeniería de Sistemas',
                'fecnac_coordinador' => '1990/08/12',
                'areacon_coor'=> 'Ingeniría de Software',
                'fechavinc_coor' => '2019/12/03',
                'acuerdo_coor' =>'acuerdo0125.pdf'
            ]
        ];
        DB::table('coordinador')->insert($datos);
    }
}
