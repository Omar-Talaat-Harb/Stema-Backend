<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donar_id')->constrained('donars')->cascadeOnDelete();
            $table->string('cord_length');
            $table->string('placental_weight');
            $table->string('cord_pathology');
            $table->string('three_vesseles');
            $table->text('answer');
            $table->string('infectious_diseases');
            $table->string('NeonatalApgarScore10m');
            $table->string('NeonatalApgarScore1m');
            $table->string('order_birth');
            $table->string('gender');
            $table->string('head_circum');
            $table->string('chest');
            $table->string('umbilical_stupm');
            $table->string('birth_weight');
            $table->string('blod_group');
            $table->string('rh');
            $table->string('dysmorphic_child');
            $table->string('fetal_anomalies');
            $table->string('fetal_distress');
            $table->string('doctor_name');
            $table->date('delivery_date');
            $table->time('delivery_time');
            $table->date('manufturing_date');
            $table->date('expiry_date');
            $table->date('cpu_date');
            $table->string('sent_by');
            $table->integer('temp_room');
            $table->string('collection_statues');
            $table->time('cpu_bank_time');
            $table->date('cpu_bank_date');
            $table->string('time_defrence');
            $table->string('placenta_free_trauma');
            $table->string('problem_collection');
            $table->string('lot_number');
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
        Schema::dropIfExists('collections');
    }
}
