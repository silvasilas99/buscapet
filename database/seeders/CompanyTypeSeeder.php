<?php

namespace Database\Seeders;

use App\Models\CompanyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTypeSeeder extends Seeder
{
    private const DEFAULT_DATA = [
        "Pet Shops",
        "Hospitais Veterinarios",
        "Clinicas Veterinarias",
        "Centros de Saúdes",
        "Veterinarios",
        "Adestradores",
        "Dog Walkers",
        "Dog Clubes",
        "Agility e Esportes",
        "Hotéis Pet",
        "Ag. Modelos Pet",
        "Fotografo Pets",
        "Day Cares",
        "Pet Sitters",
        "Criadores/Canil",
        "Funerais Pet",
        "Cemitério Pet",
        "Transporte de Pets"
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(self::DEFAULT_DATA)->map(
            function ($name) {
                CompanyType::insert([
                    "name" => $name
                ]);
            }
        );
    }
}
