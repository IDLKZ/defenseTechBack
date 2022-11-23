<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text("thumbnail");
            $table->text("imageUrl");
            //Заголовок и ссылка
            $table->string("alias");
            $table->string("link")->nullable();
            $table->string("titleRu");
            $table->string("titleKz");
            $table->string("titleEn")->nullable();
            //Подзаголовок
            $table->text("subtitleRu");
            $table->text("subtitleKz");
            $table->text("subtitleEn")->nullable();
            //Описание
            $table->text("descriptionRu");
            $table->text("descriptionKz");
            $table->text("descriptionEn")->nullable();
            //Дата публикации и активность
            $table->dateTime("publishedAt")->default(DB::raw('NOW()'));
            $table->boolean("status")->default(true);
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
        Schema::dropIfExists('events');
    }
}
