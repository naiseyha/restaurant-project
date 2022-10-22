<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2a$04$OVH0zuh.PwYl4OiExLoEj.ZqnI7ZEVNc//YYleAWsB6ZcNl4/SCJO', // password
            'remember_token' => Str::random(10),
            'is_admin' => 1
        ]);
    }
}
