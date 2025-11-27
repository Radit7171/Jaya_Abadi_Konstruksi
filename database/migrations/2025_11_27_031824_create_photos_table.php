<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('file_path'); // path file webp
            $table->integer('size_kb'); // ukuran setelah kompres
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('photos');
    }

};
