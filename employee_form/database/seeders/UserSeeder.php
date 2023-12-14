<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'kashimeerc',
            'email' => 'sunitac@gmail.com',
            'string_password' => 'test@12345',
            'password' => Hash::make('test@12345')
        ]);
    }
}