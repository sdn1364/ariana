<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->boolean('status')->default(true);
            $table->string('type');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('sector_translations', function(Blueprint $table){
            $table->id();
            $table->foreignId('sector_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            $table->unique(['sector_id', 'locale']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
}
