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
                'email' => 'fantasmaapoi@gmail.com',
                'senha' => Hash::make('senha'),
                'nome'  => 'Renan Jhonatha'
        ));
	}

}