<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Action_plans.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:38:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ActionPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('action_plans',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('action_plan_title');
        
        $table->longText('action_plan_updates');
        
        $table->longText('action_plan_risks');
        
        $table->longText('action_plan_resources');
        
        $table->date('action_plan_start');
        
        $table->date('action_plan_end');
        
        $table->String('action_plan_approval');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('initiative_id')->unsigned()->nullable();
        $table->foreign('initiative_id')->references('id')->on('initiatives')->onDelete('cascade');
        
        
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
        Schema::drop('action_plans');
    }
}
