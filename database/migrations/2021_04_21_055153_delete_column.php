<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('all_table',function(Blueprint $table){
            $table->dropColumn('student_name','city');
        });

        Schema::table('students',function(Blueprint $table){
            $table->dropColumn('student_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('bangladesh',function(Blueprint $table){

            $table->bigIncrements('id');
            $table->bigInteger('vote');
            $table->binary('img');
            $table->boolean('confirm');
            $table->char('name',50);
            $table->dateTimeTz('created_at');
            $table->ipAddress('visitor');
            $table->longText('description');
            $table->string('city',100);

        });
    }
}
