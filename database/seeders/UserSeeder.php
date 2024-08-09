<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@digesto.ar',
            'password' => Hash::make('admin')
        ]);


        $user_noticia = User::create([
            'name' => 'Noticia',
            'email' => 'noticia@digesto.ar',
            'password' => Hash::make('noticia')
        ]);

        $user_digesto = User::create([
            'name' => 'Digesto',
            'email' => 'digesto@digesto.ar',
            'password' => Hash::make('digesto')
        ]);

        $user_admin->assignRole('admin');
        $user_noticia->assignRole('noticia');
        $user_digesto->assignRole('digesto');




    }
}
