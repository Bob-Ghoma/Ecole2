<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->String("firstName",50);
            $table->String("lastName",50);
            $table->String("telephone",10);
            $table->String("mail",100)->Unique();
            $table->timestamps();

            // Relation professeur/specialite
            $table->unsignedBigInteger('specialite_id');

            // Déclarer la contrainte d'intégrité référentielle
            $table->foreign('specialite_id')
            ->references('id')
            ->on('specialite')
            ->onDelete('restrict')
            ->onUpdtae('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}
