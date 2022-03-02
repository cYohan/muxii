<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tipo1 = new Type();
        $tipo1->name = "Spin-off";

        $tipo1->save();

        $tipo2 = new Type();
        $tipo2->name = "Comic";

        $tipo2->save();

        $tipo3 = new Type();
        $tipo3->name = "Photo";

        $tipo3->save();

        $tipo4 = new Type();
        $tipo4->name = "Game";

        $tipo4->save();

        $tipo4 = new Type();
        $tipo4->name = "Map";

        $tipo4->save();
    }
}