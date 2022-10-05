<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('step')->nullable();
            $table->string('full_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('violations')->nullable();
            $table->string('email')->index()->nullable();
            $table->string('mobile')->nullable();
            $table->string('described_as')->nullable();
            $table->string('age')->nullable();
            $table->string('race')->nullable();
            $table->string('gender')->nullable();
            $table->string('company_name')->nullable();
            $table->string('medical_conditions')->nullable();
            $table->string('specific_memo')->nullable();
            $table->string('employee_total')->nullable();
            $table->string('price')->nullable();
            $table->string('workplace_hostile')->nullable();
            $table->string('workplace_discriminated')->nullable();
            $table->string('workplace_remarks')->nullable();
            $table->string('annual_compensation')->nullable();
            $table->string('preferred_method')->nullable();

            $table->text('gclid')->nullable();
            $table->string('utm_source')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->string('utm_content')->nullable();
            $table->string('utm_medium')->nullable();

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
        Schema::dropIfExists('leads');
    }
}
