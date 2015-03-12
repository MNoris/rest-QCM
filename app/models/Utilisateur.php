<?php
use Phalcon\Mvc\Model;
class Utilisateur extends Model {
	protected $id;
	protected $login;
	protected $password;
	protected $nom;
	protected $prenom;
	protected $idIrang;
	
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	public function getLogin() {
		return $this->login;
	}
	public function setLogin($login) {
		$this->login = $login;
		return $this;
	}
	
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
		return $this;
	}
	
	public function getNom() {
		return $this->nom;
	}
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}
	
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}
	
	public function getIdIrang() {
		return $this->idIrang;
	}
	public function setIdIrang($idIrang) {
		$this->idIrang = $idIrang;
		return $this;
	}
}