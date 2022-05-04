<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //permite a criação de usuario padrão para acesso ao sistema e  criptografará a senha no banco de dados
        User::create([
            'name' => 'admin',
            'email' => "admin@localhost.com",           
            'password' => bcrypt('12345678'),
        ]);
    }
}
