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
                'id_semillero'=> '1001',
                'nom_semillero'=> 'Green Clouds',
                'correo_semillero'=> 'pendiente',
                'logo_semillero'=> 'green-clouds.png',
                'descrip_semillero'=> 'GREEN CLOUDS que en su traducción al español sigifica Nubes Verdes. 
                Este nombre se justifica en primera instancia ya que el semillero de investigación sera producto del
                compromiso e iniciativas de estudiantes pertenecientes a la extension de la Universidad de Nariño en la
                ciudad de Ipiales,  conocida tambien como La ciudad de las nubes verdes, el cual es derivado de un
                curioso fenómeno que hace que al atardecer el cielo se torne verdoso. 
                Por otra parte el termino Cloud tiene un significado relevante dentro del campo computacional inciando
                por el paradigma que permite ofrecer servicios de computación a través de una red, el almacenamiento
                de datos e información y el acceso a estos desde cualquier lugar, así como también la interacción entre
                personas con el uso de TI. 
                Concretando los dos significados se pretende que el Semillero sea una espacio de trabajo, abierto a
                cualquier persona que quiera pertenecer a el, en donde se trataran y abarcaran tematicas relacionadas
                con la tecnología y las ciencias computacionales, el cual genere la transmisión de información, se
                convierta en una fuente de investigación para la región, que junto con el trabajo colectivo de sus
                participantes formen redes de intercambio de conocimiento que propicien la creación de proyectos a gran
                escala.',
                'mision'=> 'GREEN CLOUDS es un semillero fundamentado en las Ciencias de la Computación y la Ingeniería de
                Sistemas que busca fomentar la cultura investigativa, trabajo en equipo, innovación y desarrollo
                tecnológico mediante el fortalecimiento de competencias críticas que contribuyan a la generación de
                ideas que se concreten en proyectos que beneficien a la región nariñense',
                'vision'=> 'En el 2025 seremos reconocidos por la comunidad académica a nivel regional por ser un semillero que
                fomenta fuertes capacidades investigativas en sus integrantes incorporando nuevos proyectos que
                permitan la generación de conocimiento en el área de las Ciencias de la Computación y la Ingeniería de
                Sistemas ',
                'valores'=> 'Responsabilidad,Espíritu Investigativo, analítico y crítico, Transparencia, Trabajo en Equipo',
                'objetivos'=> 'Implementar procesos investigativos encaminados al emprendimiento e innovación en el área de las
                Ciencias de la Computación y la Ingeniería de Sistemas que conduzcan a la solución de las
                problemáticas que se presentan en el municipio de Ipiales',
                'linea_invest'=> 'on: Ciencia
                en Computación (CS), Ingeniería de Software (SE), Sistemas de Información (IS), Tecnología de
                Información (IT) e Ingeniería en Computación (CE).
                ',
                'presentacion'=> 'presentacion.pdf',
                'fecha_creacion_sem'=> '2019/12/03',
                'numres_semillero'=> '0125',
                'resolucion_semillero'=> 'green-clo.pdf',
                'id_coordinador'=>'2190',
            ]
        ];
        DB::table('semillero')->insert($datos);
    }   
}



