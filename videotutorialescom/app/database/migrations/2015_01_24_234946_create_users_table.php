<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      //$table->string('real_name', 100); asi le doy la longitud
      /* NOMBRE DE LA TABLA ES: users   
         "table" indica que es una tabla lo que se esta creando
         $table: creo la tabla con sus columnas */
		Schema::table('users', function($table)
		{
           $table->create();

           $table->increments('id');

           $table->string('email');
           $table->string('real_name');
           $table->string('password');

           $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	/*Si se desea eliminar se usa drop users, eliminar tabla users */
		Schema::drop('users');
	}

}
