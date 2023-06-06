<?php
namespace App;

class Trailler extends Funcoes implements IFuncoes{
	private $identificacao_registro = 9;
	private $numero_sequencial_regsitro = ''; 
	
	public function getNumero_sequencial_regsitro() {
		return $this->numero_sequencial_regsitro;
	}

	public function setNumero_sequencial_regsitro($numero_sequencial_regsitro) {
		if(is_numeric($numero_sequencial_regsitro)) {
			$numero_sequencial_regsitro = $this->add_zeros($numero_sequencial_regsitro, 6);
			
			if( $this->valid_tamanho_campo($numero_sequencial_regsitro, 6)) {
				$this->numero_sequencial_regsitro = $numero_sequencial_regsitro;
			}else {
				throw new \Exception('Error - Numero do sequencial invalido.');
			}
		}else {
			throw new \Exception('Error - Numero do sequencial invalido.');
		}
	}

	public function montar_linha() {
		$linha = 
		$this->identificacao_registro	.
		$this->montar_branco('', 393)	.
		$this->getNumero_sequencial_regsitro();
		
		return $this->valid_linha($linha);
	}
}