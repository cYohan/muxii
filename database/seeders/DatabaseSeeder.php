<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Multimedia;
use App\Models\File;
use App\Models\Subtype;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(TypesSeeder::class);
        $this->call(SubtypeSeeder::class);
    }
}