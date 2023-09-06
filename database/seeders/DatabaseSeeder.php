<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User;

        $user->name = 'Admin';
        $user->email =  'admin@gmail.com';
        $user->password = '12345';
        $user->role ='admin';

        $user->save();
    }

}
