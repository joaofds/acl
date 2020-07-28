<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 4) as $index){
            DB::table('user_role')->insert(
                [
                    'user_id' => $index,
                    'role_id' => $index
                ]
            );
        }
        $this->command->line('success user_role seeder...');
    }
}
