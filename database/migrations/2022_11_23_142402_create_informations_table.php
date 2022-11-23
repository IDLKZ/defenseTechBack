<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->text("logo");
            $table->string("sloganRu");
            $table->string("sloganKz");
            $table->string("sloganEn")->nullable();
            $table->text("descriptionRu");
            $table->text("descriptionKz");
            $table->text("descriptionEn")->nullable();
            $table->text("link");
            $table->string("specific")->nullable();
            $table->boolean("status")->default(false);
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
        Schema::dropIfExists('informations');
    }
}
