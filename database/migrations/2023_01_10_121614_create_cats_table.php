<?php

use App\Models\Cat;
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
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('sex');
            $table->double('weight');
            $table->string('type');
            $table->timestamps();
            
        });

        Cat::create(['name' => 'Garfield', 'sex' => 1, 'weight' => 20, 'type' => 'brit rövid szőrű (vörös)']);
        Cat::create(['name' => 'Nermal', 'sex' => 0, 'weight' => 10, 'type' => 'brit rövid szőrű (szürke)']);
        Cat::create(['name' => 'Szilveszter', 'sex' => 1, 'weight' => 15, 'type' => ' tuxedo cat']);
        Cat::create(['name' => 'Tom', 'sex' => 1, 'weight' => 13, 'type' => ' tuxedo cat']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
};
