<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('comment')->nullable();
            $table->tinyInteger('mark')->nullable();
            $table->boolean('is_audiobook')->default(false);
            $table->boolean('is_printed_book')->default(false);
            $table->boolean('is_ebook')->default(true);
            $table->boolean('is_litres_book')->default(true);
            $table->boolean('is_bought_audiobook')->default(false);
            $table->boolean('is_bought_printed_book')->default(false);
            $table->boolean('is_bought_ebook')->default(false);
            $table->foreignId('cycles_id')->constrained('cycles')->nullable();
            $table->foreignId('series_id')->constrained('series')->nullable();
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
