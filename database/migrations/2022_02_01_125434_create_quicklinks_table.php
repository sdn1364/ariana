<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuicklinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quicklinks', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('link');
            $table->timestamps();
        });
        Schema::create('quicklink_translations', function (Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('text');
            $table->unique(['locale', 'quicklink_id']);
            $table->timestamps();

            $table->foreignId('quicklink_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quicklinks');
    }
}
