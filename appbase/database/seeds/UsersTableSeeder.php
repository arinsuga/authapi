<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('users')->delete();
        // DB::table("users")->insert([
        //     "id" => 1,
        //     "name" => "Super Admin",
        //     "email" => "superadmin@mail.com",
        //     "email_verified_at" => now(),
        //     "dept" => "null",
        //     "noabsen" => null,
        //     "password" => Hash::make('12345678'),
        //     "remember_token" => Str::random(10),
        //     "bo" => false,
        //     "disabled" => false,
        // ]); 
        DB::table("users")->insert([
            "id" => 1,
            "name" => "Super Admin",
            "email" => "sa@email.com",
            "email_verified_at" => now(),
            "dept" => null,
            "noabsen" => null,
            "password" => Hash::make('12345678'),
            "remember_token" => Str::random(10),
            "bo" => false,
            "disabled" => false,
        ]); 
        DB::table("users")->insert([
            "id" => 2,
            "name" => "Admin",
            "email" => "admin@email.com",
            "email_verified_at" => now(),
            "dept" => null,
            "noabsen" => null,
            "password" => Hash::make('12345678'),
            "remember_token" => Str::random(10),
            "bo" => false,
            "disabled" => false,
        ]); 
        DB::table("users")->insert([
            "id" => 3,
            "name" => "John",
            "email" => "john@email.com",
            "email_verified_at" => now(),
            "dept" => null,
            "noabsen" => null,
            "password" => Hash::make('12345678'),
            "remember_token" => Str::random(10),
            "bo" => false,
            "disabled" => false,
        ]); 
        DB::table("users")->insert([
            "id" => 4,
            "name" => "Lisa",
            "email" => "lisa@email.com",
            "email_verified_at" => now(),
            "dept" => null,
            "noabsen" => null,
            "password" => Hash::make('12345678'),
            "remember_token" => Str::random(10),
            "bo" => false,
            "disabled" => false,
        ]); 
                
        
    }
}
