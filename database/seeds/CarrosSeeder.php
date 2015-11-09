<?php

use Illuminate\Database\Seeder;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$carros = [
    		0 => [
	    		'nome' => 'Gol', 
	    		'placa' => 'AAA-0000'
    		],
    		1 => [
	    		'nome' => 'Celta', 
	    		'placa' => 'BBB-1111'
    		]
    	];
        DB::table('carro')->insert($carros);
    }
}
