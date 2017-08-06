<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Action_plan_attachments.
 *
 * @author  The scaffold-interface created at 2017-08-06 12:08:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ActionPlanAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('action_plan_attachments',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('file_name');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('action_plan_id')->unsigned()->nullable();
        $table->foreign('action_plan_id')->references('id')->on('action_plans')->onDelete('cascade');
        
        
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
        Schema::drop('action_plan_attachments');
    }
}
