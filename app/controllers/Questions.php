<?php
use Ovide\Libs\Mvc\Rest\Controller;

class Questions extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = Question::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setLibelle ( $obj ["libelle"] );
		$model->setIdQuestionnaire ( $obj ["IdQuestionnaire"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}