<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->timestamp('start_date');
            $table->timestamp('due_date')->nullable();
            $table->string('progress');
            $table->float('long');
            $table->float('lat');
            $table->foreignId('sector_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('brochure')->nullable();
            $table->timestamps();
        });
        Schema::create('project_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->timestamps();

            $table->text('title');
            $table->text('background');
            $table->text('roles');
            $table->string('location');
            $table->text('client');

            $table->unique(['project_id', 'locale']);
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
