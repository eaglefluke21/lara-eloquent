<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up ()
    {
        Schema::create('eventslist', function (Blueprint $table)
        {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->string('image_url');
            $table->timestamps();

        } );
    }

    public function down()
    {
        Schema::dropIfExists('eventslist');
    }
    
};
