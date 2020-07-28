<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSuperUser();
    }

    private function createSuperUser()
    {

        $users = [
            [
                'id'        => 1, 
                'name'      => 'superuser',
                'email'     => 'superuser@example.com',
                'password'  => bcrypt('superuser'),
            ],
            [
                'id'        => 2, 
                'name'      => 'admin',
                'email'     => 'admin@example.com',
                'password'  => bcrypt('admin'),
            ],
            [
                'id'        => 3, 
                'name'      => 'manager',
                'email'     => 'manager@example.com',
                'password'  => bcrypt('manager'),
            ],
            [
                'id'        => 4, 
                'name'      => 'user',
                'email'     => 'user@example.com',
                'password'  => bcrypt('user'),
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
        $this->command->line('success users seeder...');
    }
}
