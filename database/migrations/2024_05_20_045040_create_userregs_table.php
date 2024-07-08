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
        Schema::create('userregs', function (Blueprint $table) {
            $table->id();
            $table->string('cusname');
            $table->string('age');
            $table->string('gender');
            $table->string('place');
            $table->string('phone');
            $table->string('item');
            $table->string('address');
            $table->string('uname');
            $table->string('passwd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userregs');
    }
};
