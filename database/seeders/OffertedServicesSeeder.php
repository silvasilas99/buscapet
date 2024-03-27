<?php

namespace Database\Seeders;

use App\Models\OffertedServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffertedServicesSeeder extends Seeder
{
    // ACCEPTED TYPES SO FAR = ["general", "veterinary", "bath_and_grooming"]
    private const DEFAULT_DATA = [
       [
        "name" => "",
        "type" => ""
       ],
       [
        "name" => "",
        "type" => ""
       ],
       [
        "name" => "",
        "type" => ""
       ],
       [
        "name" => "",
        "type" => ""
       ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(self::DEFAULT_DATA)->map(
            function ($item) {
                OffertedServices::insert([
                    "name" => data_get($item, "name"),
                    "type" => data_get($item, "type")
                ]);
            }
        );
    }
}
