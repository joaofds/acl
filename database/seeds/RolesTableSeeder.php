<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
    }

    private function createRoles()
    {
        $roles = [
            [
                'id' => 1, 
                'name' => 'superuser',
                'display_name' => 'super usuário',
                'description' => 'mestre dos magos'
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'administrador',
                'description' => 'segundo em privilégios no sistema.'
            ],
            [
                'id' => 3,
                'name' => 'manager',
                'display_name' => 'gerente',
                'description' => 'gerente do sistema.'
            ],
            [
                'id' => 4,
                'name' => 'user',
                'display_name' => 'usuário padrão',
                'description' => 'menores privilégios no sistema.'
            ],
        ];

        foreach($roles as $names){
            Role::create($names);
        }
        $this->command->line('success roles seeder...');
    }
}
