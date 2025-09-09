<?php

use App\Enums\StatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->after('email')->nullable();
            $table->string('username')->after('phone')->unique();
            $table->string('device_token')->after('username')->nullable();
            $table->string('web_token')->after('device_token')->nullable();
            $table->unsignedTinyInteger('status')->default(StatusEnum::ACTIVE);
            $table->string('country_code')->after('status')->nullable();
            $table->boolean('is_guest')->after('country_code')->default(false);
            $table->decimal('balance', 19, 6)->after('is_guest')->default(0);
            $table->string('creator_type')->after('balance')->nullable();
            $table->bigInteger('creator_id')->after('creator_type')->nullable();
            $table->string('editor_type')->after('creator_id')->nullable();
            $table->bigInteger('editor_id')->after('editor_type')->nullable();
             $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'username',
                'device_token',
                'web_token',
                'status',
                'country_code',
                'is_guest',
                'balance',
                'creator_type',
                'creator_id',
                'editor_type',
                'editor_id',
            ]);
            $table->dropSoftDeletes();
        });
    }
};
