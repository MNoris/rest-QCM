<?php
use Phalcon\Mvc\Model;
class Questionnaire extends Model {
	protected $id;
	protected $libelle;
	protected $idDomaine;
	protected $idUtilisateur;
	protected $date;
	
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	public function getLibelle() {
		return $this->libelle;
	}
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}
	
	public function getIdDomaine() {
		return $this->idDomaine;
	}
	public function setIdDomaine($idDomaine) {
		$this->idDomaine = $idDomaine;
		return $this;
	}
	
	public function getIdUtilisateur() {
		return $this->idUtilisateur;
	}
	public function setIdUtilisateur($idUtilisateur) {
		$this->idUtilisateur = $idUtilisateur;
		return $this;
	}
	
	public function getDate() {
		return $this->date;
	}
	public function setDate($date) {
		$this->date = $date;
		return $this;
	}
}