<?php

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
        Schema::create('rate_requests', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('email')->nullable();
            $table->string('railcar_owner')->nullable(); // 0 or 1
            $table->string('departure_station')->nullable();
            $table->string('contact_person')->nullable(); // first_name
            $table->string('railcar_type')->nullable(); // 0, 1, 2, 3
            $table->string('destination_station')->nullable();
            $table->string('forwarding_territory')->nullable(); // ter_exp
            $table->string('cargo_name')->nullable();
            $table->string('cargo_code')->nullable();
            $table->string('cargo_weight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_requests');
    }
};
