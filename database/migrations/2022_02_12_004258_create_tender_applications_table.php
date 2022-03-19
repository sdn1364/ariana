<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenderApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('tender_id')->constrained()->onDelete('cascade');
            $table->string('type');
            $table->string('status');
            $table->text('reason')->nullable();
            $table->string('bank')->nullable();
            $table->string('machinery')->nullable();
            $table->string('registration')->nullable();
            $table->string('executive_record')->nullable();
            $table->string('ads')->nullable();
            $table->string('product-Intro')->nullable();
            $table->string('competence')->nullable();
            $table->string('capacity')->nullable();
            $table->string('chart')->nullable();
            $table->string('records')->nullable();
            $table->string('info')->nullable();
            $table->string('company_info')->nullable();
            $table->string('certificate')->nullable();
            $table->string('product_name')->nullable();
            $table->string('planning')->nullable();
            $table->string('implementation')->nullable();
            $table->string('schedule')->nullable();
            $table->string('material')->nullable();
            $table->string('supply')->nullable();
            $table->string('affordability')->nullable();
            $table->string('documentation')->nullable();
            $table->string('experience')->nullable();
            $table->string('staff')->nullable();
            $table->string('offer')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('tender_applications');
    }
}
