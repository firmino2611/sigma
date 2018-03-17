<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = \App\Usuario::create([
           'nome' => 'banco',
           'email' => 'banco@banco',
           'senha' => bcrypt('banco'),
        ]);
        $usuario->assignRole('banco');

        $usuario = \App\Usuario::create([
           'nome' => 'integrador',
           'email' => 'integrador@integrador',
           'senha' => bcrypt('integrador'),
        ]);
        $usuario->assignRole('integrador');

        $usuario = \App\Usuario::create([
           'nome' => 'cliente',
           'email' => 'cliente@cliente',
           'senha' => bcrypt('cliente'),
        ]);
        $usuario->assignRole('cliente');
    }
}
