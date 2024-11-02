<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    //   Run the migrations.
    
    public function up(): void
    {
        Schema::create('table_wasinat', function (Blueprint $table) {
            // Primary Key type scema
            $table->id();

            // string type scema
            $table->string('name');
            $table->string('email');

            //integer type scema
            $table->integer('student_id');
            $table->integer('age');

            // Timestamps type scema
            $table->timestamps('project_creat');
            $table->timestamps('project_update');

            // Text Fields type scema
            $table->text('comment');
            $table->text('project_summary');

            // 

            
        });
    }

   
    //   Reverse the migrations.
     
    public function down(): void
    {
        Schema::dropIfExists('table_wasinat');
    }
};
