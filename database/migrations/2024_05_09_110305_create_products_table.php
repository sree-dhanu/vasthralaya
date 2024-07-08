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
        Schema::create('products', function (Blueprint $table) 
        {
            $table->id();
            $table->string('pname');
            $table->string('pdescription');
            $table->string('pcategory');
            // $table->string('psize');
            $table->string('pimage');
            $table->string('price');
            $table->string('stock');
            $table->string('availstock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
