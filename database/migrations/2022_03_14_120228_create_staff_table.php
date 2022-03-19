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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('type');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
        Schema::create('staff_translations', function (Blueprint $table){
            $table->id();
            $table->string('locale');
            $table->string('name');
            $table->string('position');
            $table->text('description');

            $table->foreignId('staff_id')->constrained()->onDelete('cascade');

            $table->unique(['locale', 'staff_id']);
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
        Schema::dropIfExists('staff');
    }
};
