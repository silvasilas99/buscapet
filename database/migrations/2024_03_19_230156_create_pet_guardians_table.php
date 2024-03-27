<?php

use App\Models\Gender;
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
        Schema::create("pet_guardians", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Gender::class, "gender_id");
            $table->string("fullname");
            $table->string("cpf");
            $table->date("date_of_birth");
            $table->string("phone_number");
            $table->string("email");
            $table->boolean("accepted_terms_and_conditions");
            $table->boolean("accepted_privacy_policy");
            $table->boolean("accepted_marketing_sending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pet_guardians");
    }
};
