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
                'id'                    => 'aac5960e-5f58-4b72-b23b-140a638ea481',
                'name'                  => 'user',
                'created_at'            => now(),
                'updated_at'            => now()
            ]
        ]);
    }
}