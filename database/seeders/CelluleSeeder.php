<?php

namespace Database\Seeders;

use App\Models\Cellule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelluleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Cellule::factory(10)->create();
    }
}
