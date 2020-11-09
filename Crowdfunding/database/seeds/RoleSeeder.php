<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'id' => Str::uuid(),
                'name' => 'admin',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'user',
                'created_at'    => now(),
                'updated_at'    => now(),
            ]
        ]);
    }
}
