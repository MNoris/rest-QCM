<?php
use Ovide\Libs\Mvc\Rest\Controller;

class GroupeUtilisateurs extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = GroupeUtilisateur::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setIdUtilisateur ( $obj ["idUtilisateur"] );
		$model->setIdGroupe ( $obj ["idGroupe"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}