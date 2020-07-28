<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = [

            // permissoes para superuser
            ['permission_id' => 1, 'role_id' => 1],
            ['permission_id' => 2, 'role_id' => 1],
            ['permission_id' => 3, 'role_id' => 1],
            ['permission_id' => 4, 'role_id' => 1],

            // permissoes para user
            ['permission_id' => 2, 'role_id' => 4],
        ];

        foreach($rules as $rule){
            DB::table('permission_role')->insert(
                [
                    'permission_id' => $rule['permission_id'],
                    'role_id'       => $rule['role_id']
                ]
            );
        }
        $this->command->line('success permission_role seeder...');
    }
}
