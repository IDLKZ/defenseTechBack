<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->nullable();
            $table->foreign("category_id")
                ->references("id")
                ->on("categories")
                ->onDelete('set null');
            $table->foreignId("shop_id")->nullable();
            $table->foreign("shop_id")
                ->references("id")
                ->on("shops")
                ->onDelete('set null');
            //Изображение
            $table->text("thumbnail");
            $table->text("imageUrl");
            //Ссылка
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
            //Цена
            $table->float("price");
            $table->float("oldPrice")->nullable();
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
        Schema::dropIfExists('products');
    }
}
