<?php

use App\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'name' => 'user.create',  
                'description' => 'pode criar usuários'
            ],
            [
                'id' => 2,
                'name' => 'user.read',  
                'description' => 'pode listar usuários'
            ],
            [
                'id' => 3,
                'name' => 'user.update',  
                'description' => 'pode editar usuários'
            ],
            [
                'id' => 4,
                'name' => 'user.delete',  
                'description' => 'pode deletar usuários'
            ],
        ];

        foreach($permissions as $permission){
            Permission::create($permission);
        }
        $this->command->line('success permissions seeder...');
    }
}
