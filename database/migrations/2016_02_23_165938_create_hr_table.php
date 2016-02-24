<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('employee_number')->unique()->nullable();
            $table->integer('salary')->nullable()->index();
            $table->string('position')->nullable()->index();
            $table->string('jobtitle')->nullable()->index();
            $table->string('supervisor')->nullable()->index();
            $table->date('hire_date')->nullable()->index();
            $table->string('termination_date')->nullable()->index();
            $table->smallInteger('hourly_rate')->nullable()->index();
            $table->string('department')->nullable()->index();
            $table->integer('user_id')->unsigned();
            $table->string('employment_status')->nullable();
            $table->string('employment_roles')->nullable();
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
        $table = 'hr';
        Storage::disk('local')->put($table.'_'.date('Y-m-d_H-i-s').'.bak', json_encode(DB::table($table)->get()));
        Schema::drop('hr');
    }
}
