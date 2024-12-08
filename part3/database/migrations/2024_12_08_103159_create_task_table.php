<?php

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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('priority', ['Low','Medium', 'High'])->default('Low');
            $table->string('category');
            $table->dateTime('due_date');
            $table->enum('completion_status', ['Not started','In progress', 'Complited', 'Blocked', 'In review'])->default('Not started');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
