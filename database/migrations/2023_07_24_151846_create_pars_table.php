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
        Schema::create('pars', function (Blueprint $table) {
            $table->id();
            $table->string("description");
            $table->decimal("outstanding", 15, 2);
            $table->integer("member");
            $table->decimal("par", 15, 2);
            $table->bigInteger("branch_id");
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
        Schema::dropIfExists('pars');
    }
};
