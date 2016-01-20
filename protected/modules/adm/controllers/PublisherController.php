<?php

class PublisherController extends RController {

	public $layout = 'admin';

	public function filters() {
		return array('rights', );
	}


    public function actionIndex() {

    	$model = new Publisher('search');

		$model -> unsetAttributes();
		
		
		if (isset($_GET['Publisher'])) {
			$model -> name = $_GET['Publisher']['name'];
			$model -> created = $_GET['Publisher']['created'];
		}

		$this -> render('index', array('model' => $model));
	}


	/**
	 * Edit a publisher.
	 */
	public function actionEdit($id = 0) {

		if ($id > 0) {
			$model = Publisher::model()->findByPk($id);
		} else {
			$model = new Publisher;
		}
		
		if (isset($_POST['Publisher'])) {
			$model->attributes = $_POST['Publisher'];
			if ($model->validate() && $model->save()) {
				Yii::app()->user->setFlash('successmsg', 'The changes have been saved.');
				$this->redirect('/publisher/index');
			} else {
				Yii::app()->user->setFlash('errormsg', 'Error saving the publisher page.');
				$this->render('edit', array('model' => $model, 'id' => $id));					
			}

		} else {
			$this->render('edit', array('model' => $model, 'id' => $id));	
		}	
	}



}
