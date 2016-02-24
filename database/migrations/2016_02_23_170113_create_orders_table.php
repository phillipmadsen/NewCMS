<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
      $table->engine = "InnoDB";
      
      $table->increments("id");
      $table->dateTime('purchase_date');
      $table->string('reference');
      $table->string('client');
      $table->string('amount');
      $table->string('items');
      $table->dateTime('delivery_date');
      $table->string('destination');
      $table->string('status');
      $table->integer("account_id");
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
        $table = 'orders';
        Storage::disk('local')->put($table . '_' . date('Y-m-d_H-i-s') . '.bak', json_encode(DB::table($table)->get()));
        Schema::drop('orders');
    }
}
