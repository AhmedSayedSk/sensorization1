<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorRegistry extends Migration {

	public function up()
	{
		Schema::create('visitor_registry', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ip', 32);
			$table->string('country', 4)->nullable();
			$table->integer('clicks')->unsigned()->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('visitor_registry');
	}

}
