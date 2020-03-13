<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('usuarios')->insert([
        //     'nombres' => 'Sarah',
        //     'apellidos' => 'Romero Bardales',
        //     'correo' => 'sarilis@gmail.com',
        //     'usuario' => 'sarilis',
        //     'password' => bcrypt('sarilis'),
        //     'celular' => '123456789',
        //     'mina_id' => 1
        // ]);
        DB::table('usuarios')->insert([
            'nombres' => 'Iris',
            'apellidos' => 'Salirrosas',
            'correo' => 'iris@gmail.com',
            'usuario' => 'iris',
            'password' => bcrypt('iris'),
            'celular' => '123456789',
            'mina_id' => 1
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'usuario_id' => 1
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'usuario_id' => 2
        ]);
    }
}
