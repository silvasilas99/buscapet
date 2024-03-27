<?php

use App\Models\ServiceScheduling;
use App\Models\User;
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
        Schema::create("service_scheduling_auditors", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ServiceScheduling::class, "service_scheduling_id");
            $table->foreignIdFor(User::class, "action_trigged_by_user_with_id");
            $table->string("action");
            $table->string("reason");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("service_scheduling_auditors");
    }
};
