<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_tags', function (Blueprint $table) {
            $table->id();
            //Foreign Key News
            $table->foreignId("product_id");
            $table->foreign("product_id")
                ->references("id")
                ->on("products")
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId("tag_id");
            $table->foreign("tag_id")
                ->references("id")
                ->on("productTags")
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products_tags');
    }
}
