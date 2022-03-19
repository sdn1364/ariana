<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnovationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovations', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('link')->nullable();
            $table->timestamps();
        });
        Schema::create('innovation_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('text');
            $table->unique(['locale', 'innovation_id']);
            $table->timestamps();

            $table->foreignId('innovation_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('innovations');
    }
}
