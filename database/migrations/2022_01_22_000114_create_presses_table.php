<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presses', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('subject');
            $table->string('tags');
            $table->timestamps();
        });
        Schema::create('press_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->text('title');
            $table->text('content');
            $table->unique(['press_id','locale']);
            $table->timestamps();

            $table->foreignId('press_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presses');
    }
}
