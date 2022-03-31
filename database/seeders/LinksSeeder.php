<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            'descripcion' => 'Introudccion a yeoman',
            'link' => 'https://www.youtube.com/watch?v=yUFXKhMg5Es'
            
        ]);
        DB::table('links')->insert([
            'descripcion' => 'Instalacion de Yeoman',
            'link' => 'https://yeoman.io/learning/'
            
        ]);
        DB::table('links')->insert([
            'descripcion' => 'CONSTRUYAMOS UNA APLICACIÓN WEB CON YEOMAN',
            'link' => 'https://yeoman.io/codelab/index.html'
            
        ]);
        
        DB::table('links')->insert([
            'descripcion' => 'RECURSOS DE APRENDIZAJE',
            'link' => 'https://yeoman.io/learning/resources.html'
            
        ]);
        
        DB::table('links')->insert([
            'descripcion' => 'IMPLEMENTACIÓN DE UN SITIO YEOMAN',
            'link' => 'https://yeoman.io/learning/deployment.html'
            
        ]);
        DB::table('links')->insert([
            'descripcion' => 'PREGUNTAS FRECUENTES',
            'link' => 'https://yeoman.io/learning/faq.html'
            
            
        ]);
        DB::table('links')->insert([
            'descripcion' => 'APOYO',
            'link' => 'https://yeoman.io/learning/support.html'
            
            
        ]);
    }

    
    
}
