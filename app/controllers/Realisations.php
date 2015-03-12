<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Realisations extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Realisation::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
		$model->setIdUtilisateur ( $obj ["idUtilisateur"] );
		$model->setDate ( $obj ["date"] );
		$model->setIdQuestionnaire ( $obj ["idQuestionnaire"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}