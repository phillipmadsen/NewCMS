<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
$table->engine = "InnoDB";
$table->increments("id");
$table->string("email");
$table->string("password");
$table->dateTime("created_at");
$table->dateTime("updated_at");
$table->dateTime("deleted_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = 'accounts';
        Storage::disk('local')->put($table . '_' . date('Y-m-d_H-i-s') . '.bak', json_encode(DB::table($table)->get()));
        Schema::drop('accounts');
    }
}
