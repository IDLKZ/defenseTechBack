<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //Foreign Key
            $table->foreignId("role_id");
            $table->foreign("role_id")
                ->references("id")
                ->on("roles")
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //Foreign Key Ends
            $table->text("imageUrl")->nullable();
            $table->string("name",255);
            $table->string("email",255)->unique();
            $table->string("phone",255)->unique()->nullable();
            $table->string("password",255);
            $table->boolean("status")->default(true);
            $table->boolean("verified")->default(true);
            //Created And Updated
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
        Schema::dropIfExists('users');
    }
}
