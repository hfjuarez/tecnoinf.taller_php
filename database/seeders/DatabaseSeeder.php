<?php

namespace Database\Seeders;

use App\Models\Institute;
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
        //PARA CUANDO TENGA RELACIONES
        $this->call(InstituteSeeder::class);
  //      Institute::factory(35)->create();
    }
}
