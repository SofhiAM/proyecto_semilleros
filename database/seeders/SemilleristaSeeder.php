<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;

class SemilleristaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'cod_semillerista'=>'219036196',
                'id_semillerista'=>'219036196 ',
                'nom_semillerista' => 'Luis Carlos Rosero Taimbud  ',
                'dir_semillerista' =>'Pasto,Nariño',
                'tel_semillerista' =>'3057940944 ',
                'correo_semillerista' =>'rosero21318@gmail.com ',
                'gen_semillerista' => 'M',
                'semestre_semillerista' => '3',
                'foto_semillerista' => 'Sandra.jpg',
                'reportemat_semillerista' => 'reporte.pdf',
                'prog_semillerista' => 'Ingeniería de Sistemas',
                'fecnac_semillerista' => '2001/08/12',
                'fecvinc_semillerista' => '2019/12/03',
                'estado_semillerista' =>'activo',
                'id_semillero'=> '1001'
            ],

            [
                'cod_semillerista'=>'219036212 ',
                'id_semillerista'=>'219036212  ',
                'nom_semillerista' => 'Daniela Jazmín Toro ',
                'dir_semillerista' =>'Ipiales,Nariño',
                'tel_semillerista' =>'3177818309',
                'correo_semillerista' =>'danielithatoro@gmail.com ',
                'gen_semillerista' => 'F',
                'semestre_semillerista' => '3',
                'foto_semillerista' => 'Daniela.jpg',
                'reportemat_semillerista' => 'reporte.pdf',
                'prog_semillerista' => 'Ingeniería de Sistemas',
                'fecnac_semillerista' => '2001/08/12',
                'fecvinc_semillerista' => '2019/12/03',
                'estado_semillerista' =>'activo',
                'id_semillero'=> '1001'
            ]
        ];
        DB::table('semillerista')->insert($datos);
    }
}
