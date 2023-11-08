<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id'); // Sender user
            $table->integer('reciever_id'); // Receiver user
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('type', 50);
            $table->integer('record_id');
            $table->enum('seen', ['0', '1'])->default('0');
            $table->enum('is_admin', ['0', '1'])->default('1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
