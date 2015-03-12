<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Utilisateurs extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Utilisateur::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
		$model->setLogin ( $obj ["login"] );
		$model->setPassword ( $obj ["password"] );
		$model->setNom ( $obj ["nom"] );
		$model->setPrenom ( $obj ["prenom"] );
		$model->setIdIrang ( $obj ["idIrang"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}