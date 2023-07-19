<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained('donars')->cascadeOnDelete();
            $table->string('hospital_name');
            $table->string('hospital_number');
            $table->string('donation_type');
            $table->string('stem_sells');
            $table->string('donar_consest');
            $table->string('donar_agreement');
            $table->string('unit_image');
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
        Schema::dropIfExists('cpus');
    }
}
