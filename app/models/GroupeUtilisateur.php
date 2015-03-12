<?php
use Phalcon\Mvc\Model;
class GroupeUtilisateur extends Model {
	protected $idUtilisateur;
	protected $idGroupe;
	
	
	public function getIdUtilisateur() {
		return $this->idUtilisateur;
	}
	public function setIdUtilisateur($idUtilisateur) {
		$this->idUtilisateur = $idUtilisateur;
		return $this;
	}
	
	public function getIdGroupe() {
		return $this->idGroupe;
	}
	public function setIdGroupe($idGroupe) {
		$this->idGroupe = $idGroupe;
		return $this;
	}
}