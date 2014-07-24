<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attach',function($table){
	        $table->increments('id');
	        $table->string('title',64);
	        $table->string('desc')->nullable();
	        $table->float('size')->default(0);
	        $table->string('addr',128);

     	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attach');
	}

}
