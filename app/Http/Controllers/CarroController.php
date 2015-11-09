<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Painel\Carro;

class CarroController extends Controller
{
	public function getIndex() {
		$carros = Carro::get();

		return view('painel.carros.index', compact('carros'));
	}

	public function getAdicionar() {
		return view("painel.carros.create-edit");
	}

	public function getEditar($idCarro) {
		return view("painel.carros.create-edit", ['idCarro' => $idCarro]);//"Editar o carro => {$idCarro}";
	}

	public function postEditar($array = array()) {
		return "Editando o carro ...";
	}

	public function getDeletar($idCarro) {
		return "Deletando o carro => {$idCarro}";
	}

	public function getListaCarrosLuxo() {
		return "Listando os carros de Luxo!";
	}

	public function missingMethod($params = array()) {
		return "Erro 404, page not found!";
	}
}