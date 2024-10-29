<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->smallInteger("number");
            $table->string("name");
            $table->string("type_1");
            $table->string("type_2")->nullable();
            $table->string("ability");
            $table->float("height", 7, 2);
            $table->float("weight", 7, 2);
            $table->tinyInteger("generation");
            $table->text("image_url");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
