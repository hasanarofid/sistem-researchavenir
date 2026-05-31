<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('research_views', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->uuid('user_id');
            $table->string('research_id');
            $table->timestampTz('viewed_at')->nullable();
            $table->timestampTz('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('research_views');
    }
};
