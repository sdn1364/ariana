<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('faq_translations', function(Blueprint $table){
            $table->id();
            $table->string('locale')->index();
            $table->text('question');
            $table->text('answer');
            $table->timestamps();

            $table->unique(['faq_id', 'locale']);
            $table->foreignId('faq_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
