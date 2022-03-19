<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pm_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pm_row_id')->constrained()->onDelete('cascade');
            $table->integer('part')->nullable();
            $table->string('sub_type')->nullable();
            $table->string('img')->nullable();
            $table->string('padding')->nullable();
            $table->string('type')->nullable();
            $table->string('relation')->nullable();
            $table->integer('relation_id')->nullable();
            $table->string('icon')->nullable();
            $table->string('file')->nullable();
            $table->string('link')->nullable();
            $table->timestamps();
        });

        Schema::create('pm_element_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->text('content')->nullable();
            $table->unique(['locale', 'pm_element_id']);
            $table->timestamps();

            $table->foreignId('pm_element_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pm_elements');
    }
}
