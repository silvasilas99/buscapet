<?php

namespace Database\Seeders;

use App\Models\PetsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetsTypeSeeder extends Seeder
{
    private const DEFAULT_DATA = ["Cachorro", "Gato", "Coelho", "Porquinho da India", "Furão"];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(self::DEFAULT_DATA)->map(
            function ($name) {
                PetsType::insert([
                    "name" => $name
                ]);
            }
        );
    }
}
