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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->string('complain_subject');
            $table->string('complain_description');
            $table->string('complainer_address');
            $table->string('complainer_mobile');
            $table->string('complainer_email');
            $table->string('complainer_status');
            $table->decimal('service_amount', $precision = 8, $scale = 2);
            $table->dateTime('service_confirmDate', $precision = 0);
            $table->dateTime('service_startDate', $precision = 0);            
            $table->dateTime('service_closeDate', $precision = 0);
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
        Schema::dropIfExists('orders');
    }
};
