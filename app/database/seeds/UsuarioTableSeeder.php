<?php

class UsuarioTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        #Apaga e povoa a tabela de usuarios
        DB::table('usuarios')->delete();
        Usuario::create(array(
                'email' => 'renan@proesc.com',
                'senha' => Hash::make('senha'),
                'nome'  => 'Renan Jhonatha'
        ));

        Usuario::create(array(
                'email' => 'jander@proesc.com',
                'senha' => Hash::make('senha'),
                'nome'  => 'Jander Cley'
        ));

        Usuario::create(array(
                'email' => 'felipe@proesc.com',
                'senha' => Hash::make('senha'),
                'nome'  => 'Felipe Ferreira'
        ));

        Usuario::create(array(
                'email' => 'lindomar@proesc.com',
                'senha' => Hash::make('senha'),
                'nome'  => 'Lindomar Goes'
        ));
	}

}