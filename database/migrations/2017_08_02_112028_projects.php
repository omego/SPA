<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Projects.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:20:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('projects',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('project_title');
        
        $table->longText('project_discerption');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('goal_id')->unsigned()->nullable();
        $table->foreign('goal_id')->references('id')->on('goals')->onDelete('cascade');
        
        
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
        Schema::drop('projects');
    }
}
