<?php

namespace Database\Seeders;

use App\Models\Subtype;
use Illuminate\Database\Seeder;

class SubtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $subtype1 = new Subtype();
        $subtype1->name = "Text";

        $subtype1->save();

        $subtype2 = new Subtype();
        $subtype2->name = "Image";

        $subtype2->save();

        $subtype3 = new Subtype();
        $subtype3->name = "Video";

        $subtype3->save();

        $subtype4 = new Subtype();
        $subtype4->name = "Game";

        $subtype4->save();
    }
}