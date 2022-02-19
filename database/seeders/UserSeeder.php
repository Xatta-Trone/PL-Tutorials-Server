<?php

namespace Database\Seeders;

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Monzurul islam',
            'email' => 'monzurul.ce.buet@gmail.com',
            'password' => Hash::make('12345678'),
            'student_id' => '1404143',
            'user_letter' => 'M',
            'whitelisted' => '1',
            'status' => '1'
        ]);

        User::create([
            'name' => 'Sumiya risha',
            'email' => 'sumiyarisha497@gmail.com',
            'password' => Hash::make('12345678'),
            'student_id' => '1604144',
            'user_letter' => 'S',
            'whitelisted' => '1',
            'status' => '1'
        ]);
    }
}