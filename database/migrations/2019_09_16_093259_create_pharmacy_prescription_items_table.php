<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyPrescriptionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_prescription_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prescription_id');
            $table->integer('drug_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('status_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
        Schema::dropIfExists('pharmacy_prescription_items');
    }
}
