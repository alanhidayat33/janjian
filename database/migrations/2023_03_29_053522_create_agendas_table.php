<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
{
    Schema::create('agendas', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->unsignedBigInteger('user_id');
        $table->string('name');
        $table->text('description');
        $table->text('location');
        $table->timestamp('start_date');
        $table->timestamp('end_date');
        $table->timestamp('generated_start_date')->nullable();
        $table->timestamp('generated_end_date')->nullable();

        $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
