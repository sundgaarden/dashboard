<?php

class UserController extends RController {

	public $layout = 'admin';

	public function filters() {
		return array('rights', );
	}


	/**
	 * Overview of users
	 */
    public function actionIndex() {

    	$model = new User('search');

		$model -> unsetAttributes();
		
		
		if (isset($_GET['User'])) {
			$model -> name = $_GET['Publisher']['name'];
			$model -> name = $_GET['Publisher']['email'];
			$model -> created = $_GET['Publisher']['created'];
		}

		$this -> render('index', array('model' => $model));
	}


	/**
	 * Edit a user.
	 */
	public function actionEdit($id = 0) {
		
		
		if (isset($_POST['User'])) {
			$data = $_POST['User'];

			if ($id > 0) {
				$model = User::model()->findByPk($id);
			} else {
				$model = new User();
				$model->email = $data['email'];
			}


			
			$model->name = $data['name'];
			$model->publisherid = $data['publisherid'];

			$newPassword1 = $_POST['newpassword1'];
			$newPassword2 = $_POST['newpassword2'];

			// if new password is entered
			if ($newPassword1 != '' || $newPassword2 != '') {
				if ($newPassword1 != $newPassword2) {
					Yii::app()->user->setFlash('errormsg', 'New passwords are not the same');
					$this->redirect('/user/edit/id/'.$id);
					exit;
				} else {
					$model->password = $newPassword1;
				}
			}

			// if new email is entered
			if ($model->email != $data['email']) {
				$emailmodel = User::model()->findAllByAttributes(array(), 'email = :email AND id <> :userId', array(':userId' => $id, ':email' => $data['email']));
				
				if ($emailmodel != null) {
					Yii::app()->user->setFlash('errormsg', 'New email already exists');
					$this->redirect('/user/edit/id/'.$id);
					exit;
				} else {
					$model->email = $data['email'];
				}
			}


			if ($model->validate() && $model->save()) {

					// if a new user, assign the 'Publisher' role for Rights module
					if ($id == 0) {
				        Rights::assign('Publisher', $model->id);
					}

					Yii::app()->user->setFlash('successmsg', 'The changes have been saved.');
					$this->redirect('/user/index');

			} else {
				Yii::app()->user->setFlash('errormsg', 'Error saving the changes');
				$this->render('edit', array('model' => $model));				
			}
		} else {

			if ($id > 0) {
				$model = User::model()->findByPk($id);
			} else {
				$model = new User();
			}

			$this->render('edit', array('model' => $model));	
		}	
	}

}
