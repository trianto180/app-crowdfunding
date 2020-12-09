<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id'                    => Str::uuid(),
            'name'                  => 'Angga Trianto',
            'email'                 => 'Angga@gmail.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make('password'),
            'created_at'            => now(),
            'updated_at'            => now(),
            'role_id'               => 'db134db2-c7a3-4c5a-9876-59b4863a5183'
            ],
            [
            'id'                    => Str::uuid(),
            'name'                  => 'trianto',
            'email'                 => 'Trianto@gmail.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make('password'),
            'created_at'            => now(),
            'updated_at'            => now(),
            'role_id'               => '7765211e-0b55-4d6f-a477-258475d66d78'
            ]
        ]);
    }
}