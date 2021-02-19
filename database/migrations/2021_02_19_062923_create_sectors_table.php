<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sectors', function (Blueprint $table) {
            $table->id();
            $table->string('SectorName');
            $table->tinyInteger('IsActive',4);
            $table->tinyInteger('IsDeleted',4);
            $table->timestamps();
            $table->timestamp('CreatedBy')->nullable();
            $table->timestamp('UpdatedBy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
}
