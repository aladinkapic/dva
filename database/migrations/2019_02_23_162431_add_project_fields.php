<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string("title")->nullable();
            $table->string("title_eng")->nullable();
            $table->string("title_de")->nullable();
            // categories options
            $table->integer("cat_id")->unsigned()->nullable();
            $table->integer("subcat_id")->unsigned()->nullable();
            // short descriptions
            $table->text("short_d")->nullable();
            $table->text("short_d_eng")->nullable();
            $table->text("short_d_de")->nullable();
            // image
            $table->integer("image_id")->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
