<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /** Clinics now take bookings until 8pm (last slot 7:30pm). */
    public function up(): void
    {
        DB::table('clinic_schedules')
            ->where('close_time', '19:00:00')
            ->update(['close_time' => '20:00:00']);
    }

    public function down(): void
    {
        DB::table('clinic_schedules')
            ->where('close_time', '20:00:00')
            ->update(['close_time' => '19:00:00']);
    }
};
