<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('crew_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vacancy_id')->nullable()->constrained()->nullOnDelete();
            $table->string('full_name', 120);
            $table->string('email');
            $table->string('phone', 40);
            $table->string('nationality', 100)->nullable();
            $table->string('position', 120);
            $table->unsignedTinyInteger('experience_years')->nullable();
            $table->text('message')->nullable();
            $table->string('cv_path');
            $table->json('certificates')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('crew_applications'); }
};
