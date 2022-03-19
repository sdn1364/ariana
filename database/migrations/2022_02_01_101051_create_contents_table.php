<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('page');
            $table->timestamps();
        });
        Schema::create('content_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->unique(['locale','content_id']);
            $table->timestamps();

            $table->foreignId('content_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
