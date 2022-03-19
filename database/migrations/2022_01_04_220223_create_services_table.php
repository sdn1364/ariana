<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
        Schema::create('service_translations', function (Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->fullText(['title', 'content']);
            $table->timestamps();

            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->unique(['service_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
