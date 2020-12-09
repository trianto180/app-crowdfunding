<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
                'id'                    => Str::uuid(),
                'name'                  => 'admin',
                'created_at'            => now(),
                'updated_at'            => now()
            ],
            [
                'id'                    => 'db134db2-c7a3-4c5a-9876-59b4863a5183',
                'name'                  => 'user',
                'created_at'            => now(),
                'updated_at'            => now()
            ]
        ]);
    }
}