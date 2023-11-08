<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
            $table->text('content')->nullable();
            // $table->tinyInteger('is_active')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        
        DB::table('pages')->insert(
            array(
                'title' => 'Terms & conditions',
                'slug' => 'terms',
                'content' => 'This is terms and conditions page',
            )
        );
        DB::table('pages')->insert(
            array(
                'title' => 'Privacy Policy',
                'slug' => 'privacy',
                'content' => 'This is Privacy and Policy page',
            )
        );

        DB::table('pages')->insert(
            array(
                'title' => 'Help Center',
                'slug' => 'help',
                'content' => 'This is Help page',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
