<?php
/**
 * LoginController is the controller class for login pages
 * 
 * @author Frederik Pedersen
 * @version 1.0
 */
class LoginController extends Controller
{
	public $layout = 'login';


	/**
	 * This action validates user login and redirects to dashboard or return url.
	 */
	public function actionIndex()
	{
		
		$model = new Login('login');
			

		// collect user input data
		if(isset($_POST['Login']))
		{
			$model->attributes=$_POST['Login'];
			
			// validate user input and redirect to the correct user landing page
			if($model->validate() && $model->login()) {

				$redirurl = Yii::app()->user->dashboardurl;

				$returnurl = Yii::app()->user->returnUrl;

				if (strpos($returnurl, 'sharewall.co.uk') !== false) {
					$this->redirect($redirurl);
				} else {
					$this->redirect($returnurl);							
				}
					
			} else {

				// display the login form
				$this->render('index',array('model'=>$model));
			}		
		} else {
			// display the login form
			$this->render('index',array('model'=>$model));	
		}
		
	}

	

	/**
	 * This action logs out the current user session and redirects to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->params['wwwdomain'].'/login');
	}





}