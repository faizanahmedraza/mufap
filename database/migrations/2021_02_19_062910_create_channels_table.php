<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_channels', function (Blueprint $table) {
            $table->id('ChannelID');
            $table->string('ChannelName');
            $table->tinyInteger('IsActive',false,false);
            $table->tinyInteger('IsDeleted',false,false);
            $table->timestamp('CreatedOn')->nullable();
            $table->timestamp('UpdatedOn')->nullable();
            $table->timestamp('CreatedBy')->nullable();
            $table->timestamp('UpdatedBy')->nullable();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_channels');
    }
}
