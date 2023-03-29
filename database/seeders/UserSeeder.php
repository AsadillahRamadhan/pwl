<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'rama@gmail.com',
            'email' => 'rama@gmail.com',
            'password' => bcrypt('12345')
        ];
        User::create($user); 
    }
}
