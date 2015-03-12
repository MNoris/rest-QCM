<?php
use Phalcon\Mvc\Model;
class Reponse_utilisateur extends Model {
	protected $idReponse;
	protected $idRealisation;
	
	
	public function getIdReponse() {
		return $this->idReponse;
	}
	public function setIdReponse($idReponse) {
		$this->idReponse = $idReponse;
		return $this;
	}
	
	public function getIdRealisation() {
		return $this->idRealisation;
	}
	public function setIdRealisation($idRealisation) {
		$this->idRealisation = $idRealisation;
		return $this;
	}
}