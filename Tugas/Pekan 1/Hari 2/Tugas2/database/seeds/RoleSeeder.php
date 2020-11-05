<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
            'id_role'       => Str::uuid(),
            'nama_role'     => 'Admin',
            'created_at'    => now(),
            'updated_at'    => now()
            ],
            [
            'id_role'       => '0',
            'nama_role'     => 'User',
            'created_at'    => now(),
            'updated_at'    => now()
            ]
        ]);
    }
}
?>