<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 10/15/18
 * Time: 9:31 PM
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoryTable extends Migration {

// create_accessory_table
 public function up()
    {
        Schema::create('accessory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sku');
            $table->string('description');
            $table->string('country');
            $table->string('maker');
            $table->unsignedInteger('accesory_type_id')->unsigned();

        });

        Schema::table('accessory_type', function($table) {
            $table->foreign('accesory_type_id')->references('id')->on('accessory_type');
        });

    }

}