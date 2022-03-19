<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('code');
            $table->date('deadline');
            $table->string('progress')->default('current');
            $table->string('tags');
            $table->string('document');
            $table->string('type');
            $table->foreignId('sector_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tender_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->text('title');
            $table->text('brief');
            $table->text('roles');
            $table->timestamps();

            $table->unique(['tender_id','locale']);
            $table->foreignId('tender_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenders');
    }
}
