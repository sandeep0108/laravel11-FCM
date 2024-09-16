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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fcm_token')->nullable()->after('remember_token');  // Adding FCM token field
//            $table->string('client_email')->nullable()->after('email');  // Adding FCM token field
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fcm_token');  // Dropping the FCM token field on rollback
//            $table->dropColumn('client_email');  // Dropping the FCM token field on rollback

        });
    }
};
