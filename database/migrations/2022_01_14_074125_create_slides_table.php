<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('slide_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('title');
            $table->timestamps();
            $table->unique(['locale','slide_id']);
            $table->foreignId('slide_id')->constrained()->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
