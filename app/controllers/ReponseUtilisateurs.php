<?php
use Ovide\Libs\Mvc\Rest\Controller;

class ReponseUtilisateurs extends CBase {
	public function onConstruct() {
		parent::onConstruct ();
		$this->modelclass = ReponseUtilisateur::class;
	}
	
	protected function setObject($model, $obj) {
		$model->setIdReponse ( $obj ["idReponse"] );
		$model->setIdRealisation ( $obj ["idRealisation"] );
	}
	
	public function toString() {
		return $this->getLibelle ();
	}
}