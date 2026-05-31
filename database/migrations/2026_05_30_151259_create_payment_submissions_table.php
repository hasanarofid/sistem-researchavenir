<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payment_submissions', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->uuid('user_id');
            $table->string('paket');
            $table->integer('durasi_hari');
            $table->integer('nominal');
            $table->text('bukti_url')->nullable();
            $table->text('bukti_path')->nullable();
            $table->string('status')->default('pending');
            $table->timestampTz('submitted_at')->nullable();
            $table->timestampTz('verified_at')->nullable();
            $table->uuid('verified_by')->nullable();
            $table->text('admin_notes')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_nama')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_submissions');
    }
};
