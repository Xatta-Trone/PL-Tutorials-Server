<?php

namespace Database\Seeders;

use App\Models\Admin\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Monzurul islam',
            'email' => 'monzurul.ce.buet@gmail.com',
            'password' => Hash::make('12345678'),
            'student_id' => '1404143',
            'user_letter' => 'M',

            'status' => '1'
        ]);
    }
}