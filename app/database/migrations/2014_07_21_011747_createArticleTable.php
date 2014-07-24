<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article',function($table){
	        $table->increments('id');
			$table->integer('category');
	        $table->string('title',64);
	        $table->text('content');
			$table->string('keywords',128)->nullable();
			$table->string('image')->nullable();
			$table->integer('attach')->default(0);
	        $table->integer('editor')->nullable();
			$table->string('audit',8);
	        $table->string('source',128)->nullable();
	        $table->integer('comment')->default(0);
			$table->integer('times')->nullable();
			$table->dateTime('datetime')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article');
	}

}
