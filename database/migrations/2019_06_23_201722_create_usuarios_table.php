<?php

  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Database\Migrations\Migration;

  class CreateUsuariosTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('usuarios', function(Blueprint $table)
    {
     $table->increments('id');
     $table->string('user');
     $table->string('senha');
     $table->enum('status', ['0', '1']);
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
    Schema::drop('usuarios');
  }

}
