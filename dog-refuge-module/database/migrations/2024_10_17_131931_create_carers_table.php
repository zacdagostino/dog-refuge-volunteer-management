<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('carers', function (Blueprint $table) { // Create a new table in the database called carers and Parse a closure (anonymous function) that receives a $table object to define the structure of the table.
            $table->id(); // Primary key
            $table->string('name'); // Carer's name
            $table->string('email')->unique(); // Unique email field
            $table->string('phone'); // Phone number
            $table->boolean('owns_dogs')->default(false); // Boolean for dog ownership
            $table->integer('dogs_cared_for')->default(0); // Number of dogs cared for
            $table->json('availability'); // Availability stored as JSON
            $table->timestamps(); // Created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carers'); // Drops the 'carers' table
    }
};
