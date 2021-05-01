<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Laboratorio ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Montar equipos y poner a punto instalaciones de laboratorio',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Realizar experimentos y análisis químicos y microbiológicos para estudiar la composición de sustancias',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Poner en marcha equipos de laboratorio',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Comprobar la disponibilidad de materias y productos para realizar análisis químico',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Preparar las mezclas y disoluciones necesarias',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Realizar tomas de muestras',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Preparar la muestra para el análisis, adecuándola a la técnica que se ha de utilizar',
            'ciclo' => 'Laboratorio',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Gestionar el almacén del laboratorio',
            'ciclo' => 'Laboratorio',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Tratar, envasar, etiquetar y gestionar los residuos del laboratorio',
            'ciclo' => 'Laboratorio',
        ]);

        //Telecomunicaciones ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Montar o ampliar equipos informáticos y periféricos, configurándolos, asegurando y verificando su funcionamiento',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Replantear instalaciones en telecomunicaciones de acuerdo a la documentación técnica, resolviendo los problemas e informando de otras contingencias, para asegurar la viabilidad del montaje',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Reunir materiales para realizar el montaje o mantenimiento de las instalaciones y equipos de telecomunicaciones',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Instalar y configurar software base, sistemas operativos y aplicaciones asegurando y verificando su funcionamiento',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Montar canalizaciones, cableado, armarios, soportes, entre otros, utilizando técnicas de montaje, en condiciones de calidad, seguridad y respeto al medio ambiente',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Instalar cámaras, procesadores de señal, centralitas, entre otros, utilizando herramientas de programación y asegurando su funcionamiento',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Mantener y reparar instalaciones y equipos de telecomunicaciones',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Comprobar el funcionamiento de instalaciones o equipos de telecomunicaciones, para ponerlos en servicio',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Manejar y controlar transmisores en emisoras de radio y televisión',
            'ciclo' => 'Telecomunicaciones',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Ajustar maquinaria e instalar equipos electrónicos en edificios, fábricas, tiendas, etc.',
            'ciclo' => 'Telecomunicaciones',
        ]);

        //Soldadura y calderería ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Preparar los sistemas automáticos de máquinas, útiles de corte y mecanizado necesario para soldar',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Organizar la zona de trabajo de soldadura, seleccionando materiales, herramientas, instrumentos, equipos y elementos de montaje y protección',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Construir plantillas, útiles, camas y soportes para realizar construcciones metálicas',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Realizar construcciones metálicas trazando, cortando, mecanizando y cambiando la forma de chapas, perfiles y tubería',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Comprobar los productos fabricados',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Montar estructuras y tuberías metálicas',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Unir componentes de construcciones metálicas, mediante soldadura',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Cortar componentes y elementos de construcciones metálicas',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Proteger tuberías con el tratamiento de protección requerido',
            'ciclo' => 'Soldadura',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Realizar el mantenimiento de primer nivel en máquinas y equipos de Soldadura y Calderería',
            'ciclo' => 'Soldadura',
        ]);

        //Gestión Administrativa ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Trabajar ordenando, clasificando y archivando documentos',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Organizar y controlar la recepción, almacenamiento y expedición de mercancías, anotando las entradas y las salidas',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Realizar trabajos de oficina, manejando ordenadores, teléfonos, fotocopiadoras, etc',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Trabajar en contabilidad. Cobrar, pagar y comprobar que esto se ha hecho correctamente',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Ser empresario',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Trabajar como cajero en un banco',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Ejercer la profesión de administrativo',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Ser relaciones públicas y comercializar productos y servicios',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Desempeñar actividades de atención al cliente/usuario',
            'ciclo' => 'GAdministrativa',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Contratar pólizas de seguros. Entrevistarse con el cliente para averiguar la clase de seguro que necesita',
            'ciclo' => 'GAdministrativa',
        ]);

        //Desarrollo Aplicaciones Web ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Configurar sistemas informáticos',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Gestionar servidores para permitir la introducción de aplicaciones web',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Gestionar bases de datos',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Desarrollar e integrar aplicaciones web',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Programar en Java',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Diseñar páginas web',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Crear apps para Android',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Maquetar páginas web con HTML5 y CSS3',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Programar la parte visual de una página web usando Javascript y alguna de sus librerías',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Programar videojuegos',
            'ciclo' => 'DAW',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Administrar ordenadores y servidores',
            'ciclo' => 'DAW',
        ]);
 
        //Guías, información, y asistenia turística ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Ejercer de guía para una ciudad, un museo, monumentos, etc.',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Dirigir y organizar actividades turísticas',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Trabajar como recepcionista',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Trabajar en una oficina de información turística',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Organizar eventos',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Ser promotor turístico',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Trabajar como Agente de desarrollo local',
            'ciclo' => 'Turismo',
        ]);
        DB::table('preguntas')->insert([
            'pregunta' => 'Ser Community Manager para hoteles, agencias de viajes y destinos turísticos',
            'ciclo' => 'Turismo',
        ]);

        //Construcciones metálicas ---------------------------------------------------------------------------
        DB::table('preguntas')->insert([
            'pregunta' => 'Diseñar productos metálicos como vigas, tuberías, estructuras, etc.',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Realizar cálculos necesarios para fabricar los productos metálicos',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Elaborar, organizar y mantener actualizada la documentación técnica necesaria para la fabricación y mantenimiento de los productos diseñados',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Definir las operaciones de fabricación, montaje y mantenimiento de construcciones metálicas',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Supervisar que la programación y puesta a punto de las máquinas y robots se ajusta a los requerimientos establecidos',
            'ciclo' => 'ConstruccionesMetalicas',
        ]); 
        DB::table('preguntas')->insert([
            'pregunta' => 'Programar la producción utilizando medios informáticos',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Determinar el aprovisionamiento necesario, para garantizar el suministro adecuado de materias primas para la fabricación de productos metálicos',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);        
        DB::table('preguntas')->insert([
            'pregunta' => 'Gestionar el mantenimiento de los recursos de mi área en función de las necesidades',
            'ciclo' => 'ConstruccionesMetalicas',
        ]);


    }
}
