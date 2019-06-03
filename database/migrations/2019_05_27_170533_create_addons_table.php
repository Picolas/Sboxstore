<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addons', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('description');
			$table->string('categories');
			$table->string('author');
			$table->string('price');
			$table->string('file');
			$table->longText('features');
			$table->longText('functionnality');
			$table->longText('faq');
			$table->longText('languages');
			$table->longText('requirements');
			$table->longText('related');
			$table->longText('featured_reviews');
			$table->longText('featured_image');
			$table->longText('background_image');
			$table->integer('is_drm');
			$table->integer('status');
			$table->integer('status_message');
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
        Schema::dropIfExists('addons');
    }
}
