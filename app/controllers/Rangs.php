<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Rangs extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Rang::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}