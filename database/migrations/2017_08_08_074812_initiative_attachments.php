<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Initiative_attachments.
 *
 * @author  The scaffold-interface created at 2017-08-08 07:48:12am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InitiativeAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('initiative_attachments',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('file_name');
        
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
        Schema::drop('initiative_attachments');
    }
}
