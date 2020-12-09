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
            'role_id'               => 'aac5960e-5f58-4b72-b23b-140a638ea481'
            ],
            [
            'id'                    => Str::uuid(),
            'name'                  => 'trianto',
            'email'                 => 'Trianto@gmail.com',
            'email_verified_at'     => now(),
            'password'              => Hash::make('password'),
            'created_at'            => now(),
            'updated_at'            => now(),
            'role_id'               => 'ca71172f-f362-4055-a79b-dfe770145f5e'
            ]
        ]);
    }
}