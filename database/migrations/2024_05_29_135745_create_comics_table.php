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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->text('decription');
            $table->text('thumb');
            $table->decimal('price', total: 4, places: 2);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 100);
            $table->string('artists', 100);
            $table->string('writers', 100);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
