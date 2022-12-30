<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'username' => 'admin',
            'name' => 'espace admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'level' => 'admin'
            
            ],

            [
            'username' => 'prof',
            'name' => 'espace prof',
            'email' => 'prof@prof.com',
            'level' => 'prof',
            'password' => bcrypt('123456')
            ],
            [
                'username' => 'super',
                'name' => 'Espace superviseur',
                'email' => 'superviseur@superviseur.com',
                'level' => 'superviseur',
                'password' => bcrypt('123456')
                ],
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
