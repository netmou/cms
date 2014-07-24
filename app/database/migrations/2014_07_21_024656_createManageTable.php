<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manage',function($table){
			$table->increments('id');
			$table->string('uname');
			$table->string('passwd',128);
			$table->integer('role');
			$table->string('phone',16)->nullable();
			$table->string('mail',32)->nullable();
			$table->integer('times');
			$table->dateTime('last')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('manage');
	}

}
