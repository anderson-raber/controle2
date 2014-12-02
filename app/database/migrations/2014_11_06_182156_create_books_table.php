<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('books', function (Blueprint $table) {
			$table->increments('id');
			$table->text('title');
			$table->integer('author');
			$table->integer('year');
			$table->text('publisher');
			$table->text('language');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('books');
	}

}
