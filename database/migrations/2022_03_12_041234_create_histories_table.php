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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('year');
            $table->timestamps();
        });

        schema::create('history_translations', function (Blueprint $table){
            $table->increments('id');
            $table->foreignId('history_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->text('content');
            $table->unique(['history_id', 'locale']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
