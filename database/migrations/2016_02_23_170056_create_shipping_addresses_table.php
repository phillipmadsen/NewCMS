<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->string('nickname')->nullable()->index();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('street_additional')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->default('United States')->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->engine = 'InnoDB';
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
        $table = 'shipping_addresses';
        Storage::disk('local')->put($table . '_' . date('Y-m-d_H-i-s') . '.bak', json_encode(DB::table($table)->get()));
        Schema::drop('shipping_addresses');
    }
}
