<?php

namespace Database\Seeders;

use App\Models\Format;
use Illuminate\Database\Seeder;

class FormatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $formato1 = new Format();
        $formato1->type = "Spin-off";

        $formato1->save();

        $formato2 = new Format();
        $formato2->type = "Picture";

        $formato2->save();

        $formato3 = new Format();
        $formato3->type = "Video";

        $formato3->save();
    }
}