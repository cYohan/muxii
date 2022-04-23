<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $file1 = new File();

        $file1->title = "Diarios discretos";
        $file1->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper massa vel mi maximus elementum. Curabitur laoreet interdum ligula a porta. Etiam dignissim mi id ex elementum placerat vitae sed tortor. Sed ultrices lorem erat, quis bibendum orci pretium porttitor. Praesent lectus nunc, placerat vel risus non, aliquet vehicula ante. Etiam ullamcorper velit sit amet turpis pellentesque, eu sagittis orci ultricies. Phasellus risus felis, vehicula ullamcorper gravida eget, luctus in dolor.";
        $file1->user_id = 1;
        $file1->type_id = 1;

        $file1->save();

        $file2 = new File();

        $file2->title = "Amores perros";
        $file2->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper massa vel mi maximus elementum. Curabitur laoreet interdum ligula a porta. Etiam dignissim mi id ex elementum placerat vitae sed tortor. Sed ultrices lorem erat, quis bibendum orci pretium porttitor. Praesent lectus nunc, placerat vel risus non, aliquet vehicula ante. Etiam ullamcorper velit sit amet turpis pellentesque, eu sagittis orci ultricies. Phasellus risus felis, vehicula ullamcorper gravida eget, luctus in dolor.";
        $file2->user_id = 2;
        $file2->type_id = 1;

        $file2->save();

        $file3 = new File();

        $file3->title = "Sueños Oscuros";
        $file3->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper massa vel mi maximus elementum. Curabitur laoreet interdum ligula a porta. Etiam dignissim mi id ex elementum placerat vitae sed tortor. Sed ultrices lorem erat, quis bibendum orci pretium porttitor. Praesent lectus nunc, placerat vel risus non, aliquet vehicula ante. Etiam ullamcorper velit sit amet turpis pellentesque, eu sagittis orci ultricies. Phasellus risus felis, vehicula ullamcorper gravida eget, luctus in dolor.";
        $file3->user_id = 3;
        $file3->type_id = 1;

        $file3->save();

        $game1 = new File();

        $game1->title = "Helicoptero";
        $game1->description = "Adentrate, se el piloto de un helicoptero que debe escapar de cohetes que quieren destruirlo, ¡A por ello soldado!";
        $game1->user_id = 1;
        $game1->type_id = 4;

        $game1->save();

        $game2 = new File();

        $game2->title = "Laberinto";
        $game2->description = "Oh no, estamos perdidos! Soldado, tu misión será salir de este enorme laberinto";
        $game2->user_id = 2;
        $game2->type_id = 4;

        $game2->save();

        $comic1 = new File();

        $comic1->title = "The Mad Squad";
        $comic1->description = "Un asesino loco, jovenes adolecentes y muchas hamburguesas, ¿Qué podría malir sal?";
        $comic1->portada = "portada_tms.png";
        $comic1->user_id = 3;
        $comic1->type_id = 2;

        $comic1->save();
    }
}