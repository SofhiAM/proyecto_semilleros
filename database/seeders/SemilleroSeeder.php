<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemilleroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;

class SemilleroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'id_semillero'=> 1001,
                'nom_semillero'=> 'Green Clouds',
                'correo_semillero'=> 'pendiente',
                'logo_semillero'=> 'green-clouds.png',
                'descrip_semillero'=> 'GREEN CLOUDS que en su traducción al español sigifica Nubes Verdes',
                'mision'=> 'GREEN CLOUDS',
                'vision'=> 'En el 2025 ',
                'valores'=> 'Responsabilidad',
                'objetivos'=> 'Implementar',
                'linea_invest'=> 'r',
                'presentacion'=> 'pendiente',
                'fecha_creacion_sem'=> '1212/12/12',
                'numres_semillero'=> 1234,
                'resolucion_semillero'=> 'green-clo.pdf',
                'id_coordinador'=>2190,
            ]
        ];
        
    }   
}
