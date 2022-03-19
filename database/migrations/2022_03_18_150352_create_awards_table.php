<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
        Schema::create('award_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale');
            $table->text('content');
            $table->timestamps();
            $table->foreignId('award_id')->constrained()->onDelete('cascade');
            $table->unique(['locale', 'award_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awards');
    }
};
