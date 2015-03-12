<?php
use Phalcon\Mvc\Model;
class Question extends Model {
	protected $id;
	protected $libelle;
	protected $idQuestionnaire;
	
	
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
	
	public function getIdQuestionnaire() {
		return $this->idQuestionnaire;
	}
	public function setIdQuestionnaire($idQuestionnaire) {
		$this->idQuestionnaire = $idQuestionnaire;
		return $this;
	}
	
}