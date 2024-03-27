<?php

use App\Models\CompaniesServices;
use App\Models\Pet;
use App\Models\PetGuardian;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("service_schedulings", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(PetGuardian::class, "pet_guardian_id");
            $table->foreignIdFor(Pet::class, "pet_id");
            $table->foreignIdFor(CompaniesServices::class, "company_service_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("service_schedulings");
    }
};
