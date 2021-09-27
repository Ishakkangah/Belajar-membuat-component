<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name' => 'Ishak Angah',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ],
            [
            'name' => 'Johan saputra',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password')
            ]
        ]);
    }
}
