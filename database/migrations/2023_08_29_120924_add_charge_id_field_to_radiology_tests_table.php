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
        Schema::table('radiology_tests', function (Blueprint $table) {
            $table->unsignedInteger('charge_id')->nullable();
            $table->foreign('charge_id')->references('id')->on('charges')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('radiology_tests', function (Blueprint $table) {
            $table->dropIfExists('charge_id');
        });
    }
};
