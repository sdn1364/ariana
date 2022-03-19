<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
        Schema::create('career_translations',function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('summary');
            $table->string('section');
            $table->string('location');
            $table->text('responsibilities');
            $table->text('requirements');
            $table->timestamps();

            $table->unique(['career_id', 'locale']);
            $table->foreignId('career_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
