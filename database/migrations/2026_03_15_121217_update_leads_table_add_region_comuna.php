<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('region')->after('ciudad');
            $table->string('comuna')->after('region');
            $table->dropColumn('ciudad');
        });
    }

    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('ciudad')->after('email');
            $table->dropColumn(['region', 'comuna']);
        });
    }
};