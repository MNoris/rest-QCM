<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Domaines extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Domaine::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}