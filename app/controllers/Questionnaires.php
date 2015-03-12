<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Questionnaires extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Questionnaire::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
		$model->setIdDomaine ( $obj ["idDomaine"] );
		$model->setIdUtilisateur ( $obj ["idUtilisateur"] );
		$model->setDate ( $obj ["date"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}