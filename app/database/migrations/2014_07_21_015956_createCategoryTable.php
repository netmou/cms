<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category',function($table){
	        $table->increments('id');
	        $table->integer('parent')->default('0');
	        $table->string('title',64);
	        $table->string('symbol',32)->nullable();
	        $table->integer('index')->default('0');
			$table->string('type',8)->nullable();
			$table->string('url',8)->nullable();
	        $table->string('show',8)->default('normal');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('category');
	}

}
