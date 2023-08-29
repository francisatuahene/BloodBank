<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('donor_full_name');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('quantity');
            $table->string('collection_date');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_infos');
    }
}
