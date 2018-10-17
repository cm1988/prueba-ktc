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


class CreateAccessoryTypeTable extends Migration {
// create_accessory_table
 public function up()
    {
        Schema::create('accessory_type', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type');

        });
    }
}