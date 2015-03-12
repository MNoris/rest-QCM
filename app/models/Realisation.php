<?php
use Phalcon\Mvc\Model;
class Realisation extends Model {
	protected $id;
	protected $idUtilisateur;
	protected $idQuestionnaire;
	protected $date;
	
	
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	
	public function getIdUtilisateur() {
		return $this->idUtilisateur;
	}
	public function setIdUtilisateur($idUtilisateur) {
		$this->idUtilisateur = $idUtilisateur;
		return $this;
	}
	
	public function getIdQuestionnaire() {
		return $this->idQuestionnaire;
	}
	public function setIdQuestionnaire($idQuestionnaire) {
		$this->idQuestionnaire = $idQuestionnaire;
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