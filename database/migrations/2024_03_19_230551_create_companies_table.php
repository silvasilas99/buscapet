<?php

use App\Models\CompanyType;
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
        Schema::create("companies", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CompanyType::class, "companie_type_id");
            $table->string("social_reason");
            $table->string("address");
            $table->string("land_line");
            $table->string("phone_number");
            $table->string("email");
            $table->string("instagram_url");
            $table->string("x_url");
            $table->string("opening_hours_and_dates");
            $table->string("contact_name");
            $table->string("cnpj");
            $table->boolean("accepted_terms_of_use");
            $table->boolean("accepted_privacy_policy");
            $table->boolean("accepted_marketing_sending");
            $table->boolean("accepted_terms_and_conditions");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("companies");
    }
};
