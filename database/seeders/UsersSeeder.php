<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $usuario1 = new User();

        $usuario1->name = "Juanito";
        $usuario1->first_name = "Juan";
        $usuario1->last_name = "Perez";
        $usuario1->email = "juan@gmail.com";
        $usuario1->password = Hash::make("12345678");

        $usuario1->save();

        $usuario2 = new User();

        $usuario2->name = "Kmilo";
        $usuario2->first_name = "Camilo";
        $usuario2->last_name = "Gutierrez";
        $usuario2->email = "camilo@gmail.com";
        $usuario2->password = Hash::make("12345678");

        $usuario2->save();

        $usuario3 = new User();

        $usuario3->name = "Santi";
        $usuario3->first_name = "Santiago";
        $usuario3->last_name = "Jimenez";
        $usuario3->email = "santi@gmail.com";
        $usuario3->password = Hash::make("12345678");

        $usuario3->save();
    }
}