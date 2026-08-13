<?php

use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            //foreign key untuk relasi ke table Subjects
            $table->foreignIdFor(Subject::class) 
                    ->constrained() //key constraint
                    ->cascadeOnDelete();
            $table->longText('payload');
            $table->enum('correct_answer', ['A','B','C','D']);
            //$table->char('correct_answer');
            //bobot soal
            $table->integer('score')->default(1);
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
