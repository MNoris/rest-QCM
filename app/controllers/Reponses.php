<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Reponses extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Reponse::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
		$model->setIdQuestion ( $obj ["idQuestion"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}