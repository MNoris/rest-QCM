<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Groupes extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Groupe::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}