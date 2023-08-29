<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('patient_name');
            $table->string('gender');
            $table->date('date_required');
            $table->text('address');
            $table->string('contact');
            $table->string('reason_for_request');
            $table->string('profile_pic')->nullable();
            $table->string('unit_of_blood');
            $table->string('hospital_address');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
}
