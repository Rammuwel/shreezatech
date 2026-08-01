<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('career_applications', function (Blueprint $table) {
            $table->string('resume_url', 512)->nullable()->after('resume_path');
            $table->string('resume_public_id', 255)->nullable()->after('resume_url');
            $table->string('resume_original_name', 255)->nullable()->after('resume_public_id');
            $table->unsignedBigInteger('resume_size')->nullable()->after('resume_original_name');
        });
    }

    public function down(): void
    {
        Schema::table('career_applications', function (Blueprint $table) {
            $table->dropColumn(['resume_url', 'resume_public_id', 'resume_original_name', 'resume_size']);
        });
    }
};
