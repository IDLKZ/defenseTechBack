<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->text("imageUrl");
            $table->string("titleRu");
            $table->string("titleKz");
            $table->string("titleEn")->nullable();
            $table->text("subtitleRu");
            $table->text("subtitleKz");
            $table->text("subtitleEn")->nullable();
            $table->text("link");
            $table->boolean("status")->default(true);
            $table->dateTime("publishedAt")->default(DB::raw('NOW()'));
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
        Schema::dropIfExists('announcements');
    }
}
