<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Initiatives.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:10:49pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Initiatives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('initiatives',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('initiative_title');
        
        $table->longText('initiative_description');
        
        $table->integer('kpi_previous');
        
        $table->integer('kpi_current');
        
        $table->integer('kpi_target');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('project_id')->unsigned()->nullable();
        $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('initiatives');
    }
}
