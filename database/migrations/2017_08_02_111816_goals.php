<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Goals.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:18:16am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Goals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('goals',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('goal_title');
        
        $table->longText('goal_discerption');
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('goals');
    }
}
