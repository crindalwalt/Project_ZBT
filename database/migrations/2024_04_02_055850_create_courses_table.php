<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->string("price_id");
            $table->string("category_id");
            $table->longText("description");
            $table->string("video");
            $table->string("image");
            $table->date("start_date");
            $table->string("months")->nullable();
            $table->string("language");
            $table->string("duration");
            $table->enum("type", ["paid", "free"]);
            $table->string("regular_price");
            $table->string("discount_price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
