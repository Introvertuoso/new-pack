<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // TODO: Need to make this an unsignedBigInteger for the products() to work
            $table->string('client_name')->nullable();
            $table->string('type');
            // Code?
            // TODO: Maybe replace this here attribute
            // TODO: and create a new table with a one-to-one relationship with this one?
            $table->unsignedInteger('amount')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {

    }
}
