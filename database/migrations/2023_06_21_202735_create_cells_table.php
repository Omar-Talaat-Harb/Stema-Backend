<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cells', function (Blueprint $table) {
            $table->id();
            $table->char('quality_of_collection_bags_cleanness')->nullable();
            $table->float('num_of_needles', 3, 1)->nullable();
            $table->char('satellite_bag')->nullable();
            $table->char('clots')->nullable();
            $table->double('net_weight',5,1)->nullable();
            $table->double('volume',4,1)->nullable();
            $table->double('prewbcsx109l',9,6)->nullable();
            $table->double('pre_%cd+45/34',9,6)->nullable();
            $table->double('pre_viability_of_tnc',9,6)->nullable();
            $table->double('post_wbcsx109/l',9,6)->nullable();
            $table->char('result')->nullable();
            //page2
            $table->string('sample_type')->nullable();
            $table->date('sample_sent_date')->nullable();
            $table->string('pre_vaiblity_teqniqe')->nullable();
            $table->string('pre_vaiblity_results')->nullable();
            $table->string('pre_count_of_viable_cell')->nullable();
            $table->string('pre_dilution_factor')->nullable();
            $table->string('pre_average_viable_cd34/cd45_positive_cell_percentage')->nullable();
            $table->string('pre_average_viable_absolute_cd34_positive_cell_count')->nullable();
            $table->string('pre_average_viable_cd34_positive_cell_percentage')->nullable();
            $table->string('pre_count_of_cd34_positive_cell_preprocessing')->nullable();
            //page3
            $table->string('post_vaiblity_teqniqe')->nullable();
            $table->string('post_vaiblity_results')->nullable();
            $table->string('post_count_of_viable_cell')->nullable();
            $table->string('post_dilution_factor')->nullable();
            $table->string('approved_status')->nullable();
            $table->string('post_average_viable_cd34/cd45_positive_cell_percentage')->nullable();
            $table->string('post_average_viable_absolute_cd34_positive_cell_count')->nullable();
            $table->string('post_average_viable_cd34_positive_cell_percentage')->nullable();
            //page 4
            $table->string('post_count_of_cd34_positive_cell_preprocessing')->nullable();
            $table->string('test_performed_by')->nullable();
            $table->time('start_freezing_time')->nullable();
            $table->time('end_freezing_time')->nullable();
            $table->time('injection_start_time')->nullable();
            $table->time('injection_end_time')->nullable();
            $table->string('start_temperature')->nullable();
            $table->string('end_point_temperature')->nullable();
            $table->unsignedBigInteger('doner id')->nullable();
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
        Schema::dropIfExists('cells');
    }
}
