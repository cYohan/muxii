<?php

namespace Database\Seeders;

use App\Models\Multimedia;
use App\Models\File;
use Illuminate\Database\Seeder;

class CoperamaniaSeeder extends Seeder
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

        $file1->title = "COOPERAMANIA P1";
        $file1->description = "Adentrate en el mundo del coperativismo";
        $file1->user_id = 1;
        $file1->type_id = 2;

        $file1->save();

        $file2 = new File();

        $file2->title = "COOPERAMANIA P2";
        $file2->description = "Aprendamos sobre coperativismo";
        $file2->user_id = 1;
        $file2->type_id = 2;

        $file2->save();

        $file3 = new File();

        $file3->title = "COOPERAMANIA P3";
        $file3->description = "Sigamos aprendiendo sobre coperativismo";
        $file3->user_id = 1;
        $file3->type_id = 2;

        $file3->save();

        for ($i = 1; $i <= 29; $i++) {

            $hoja = new Multimedia();

            $hoja->name = "p" . $i . ".png";
            $hoja->ruta = $hoja->name;
            $hoja->carpeta = "Cooperamania Ep0";
            $hoja->text = "";
            $hoja->file_id = $file1->id;

            $hoja->save();
        }

        for ($i = 1; $i <= 41; $i++) {

            $hoja1 = new Multimedia();

            $hoja1->name = "p" . $i . ".png";
            $hoja1->ruta = $hoja->name;
            $hoja1->carpeta = "Cooperamania Ep2";
            $hoja1->text = "";
            $hoja1->file_id = $file2->id;

            $hoja1->save();
        }

        for ($i = 1; $i <= 32; $i++) {

            $hoja2 = new Multimedia();

            $hoja2->name = "p" . $i . ".png";
            $hoja2->ruta = $hoja->name;
            $hoja2->carpeta = "Cooperamania Ep3";
            $hoja2->text = "";
            $hoja2->file_id = $file3->id;

            $hoja2->save();
        }
    }
}