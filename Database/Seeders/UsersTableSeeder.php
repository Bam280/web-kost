<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'is_admin'=> '1',
            'name' => 'Udin',
            'nik' => '1234567890123456',
            'noTelp' => '081234567890',
            'alamat' => 'Jl. Jalan',
            'tanggal_lahir' => '1999-01-01',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin12345'),
            'remember_token' => Str::random(10),
        ]);
    }
}