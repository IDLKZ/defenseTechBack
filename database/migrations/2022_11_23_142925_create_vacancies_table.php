<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->integer("salaryMin");
            $table->integer("salaryMax");
            //Заголовок и ссылка
            $table->string("alias")->unique();
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
            //Место работы
            $table->text("location")->nullable();
            $table->text("phone")->nullable();
            $table->text("email")->nullable();
            //Активность
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
        Schema::dropIfExists('vacancies');
    }
}
