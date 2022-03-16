<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Assets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('emp_name');
            $table->string('emp_email');
            $table->string('emp_asset_num')->nullable();
            $table->string('emp_comments')->nullable();
            $table->string('emp_file_upload')->nullable();
            $table->string('emp_os')->nullable();
            $table->string('emp_browser')->nullable();
            $table->string('emp_ip_address')->nullable();
            $table->string('emp_city')->nullable();
            $table->string('emp_state')->nullable();
            $table->string('emp_country')->nullable();
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
        //
    }
}
