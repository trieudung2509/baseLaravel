<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_vi')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('position')->nullable();
            $table->string('description_vi')->nullable();
            $table->string('title_seo_vi')->nullable();
            $table->string('meta_key_vi')->nullable();
            $table->string('meta_des_vi')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intros');
    }
}
