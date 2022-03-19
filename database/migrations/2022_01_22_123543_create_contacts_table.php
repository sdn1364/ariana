<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('lat');
            $table->string('long');
            $table->string('zip');
            $table->string('phone');
            $table->string('fax');
            $table->timestamps();
        });
        Schema::create('contact_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('address');
            $table->string('working_time');
            $table->unique(['contact_id','locale']);
            $table->timestamps();

            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
