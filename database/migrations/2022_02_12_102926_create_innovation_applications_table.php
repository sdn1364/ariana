<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnovationApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('innovation_applications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('fullname');
            $table->string('organizational_title');
            $table->string('company_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('field');
            $table->string('usage');
            $table->text('explanation');
            $table->string('sample')->nullable();
            $table->text('description');
            $table->text('conditions');
            $table->text('benefits');
            $table->text('obstacles');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('reason')->nullable();
            $table->string('status')->default('pending');
            $table->string('level')->nullable();
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
        Schema::dropIfExists('innovation_applications');
    }
}
