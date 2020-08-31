<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('applicant_name');
            $table->dateTime('dob');
            $table->string('gender');
            $table->string('applicant_contact_number');
            $table->string('applicant_email');
            $table->string('district');
            $table->string('region');
            $table->string('business_name');
            $table->text('business_details');
            $table->string('business_sector');
            $table->boolean('business_registered')->default(0);
            $table->string('business_location');
            $table->string('business_status');
            $table->boolean('training_received')->default(0);
            $table->boolean('neip_applied')->default(0);
            $table->string('supervising_officer_name');
            $table->string('supervising_officer_number');
            $table->string('supervising_officer_email');
            $table->string('supervising_officer_desigation');
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
        Schema::dropIfExists('application_forms');
    }
}
