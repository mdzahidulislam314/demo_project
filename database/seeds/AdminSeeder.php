<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'phone' => '1234567890',
            'password' => Hash::make('123456'),
        ]);
    }
}
