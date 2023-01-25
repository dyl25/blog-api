<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\EmailStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_statues', function (Blueprint $table) {
            $table->id();

            $table->string('email', 255);
            $table->boolean('sent');
            $table->enum('status', EmailStatus::getStatus());
            $table->string('template', 255);
            $table->dateTime('sent_at');

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
        Schema::dropIfExists('email_statuses');
    }
};
