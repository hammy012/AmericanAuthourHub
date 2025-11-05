<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // اگر admin پہلے سے موجود نہ ہو تو بناؤ
        Admin::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Site Admin',
                'password' => Hash::make('password'), // بعد میں بدل لیں
            ]
        );
    }
}
