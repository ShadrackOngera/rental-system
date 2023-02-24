<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create admin users
         */
        $user = \App\Models\User::create([
            'name' => 'Aurelia Mwikali',
            'email' => 'aurelia@domain.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

//        $user->assignRole($adminRole);
    }
}
