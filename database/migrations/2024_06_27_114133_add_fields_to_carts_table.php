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
        Schema::table('carts', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->boolean('bold')->default(0);
            $table->string('desc')->nullable();
            $table->smallInteger('group')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('bold');
            $table->dropColumn('desc');
            $table->dropColumn('group');
        });
    }
};
