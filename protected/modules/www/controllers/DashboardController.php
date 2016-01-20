<?php

class DashboardController extends RController {

	public $layout = 'backend';
	public $localeToday = '';

	public function filters() {
		return array('rights', );
	}


    public function actionIndex($view = '', $id = null) {



    	if ($id != null && Yii::app()->user->isAdmin) {
    		$publisher = Publisher::model()->findByPk($id);

    		if ($publisher !== null) {
				Yii::app() -> user -> setState('publisherName', $publisher -> name);
				Yii::app() -> user -> setState('publisherId', $publisher -> id);
				Yii::app() -> user -> setState('keenProjectId', $publisher -> keenprojectid);
				Yii::app() -> user -> setState('timezoneName', $publisher -> timezone -> name);
				Yii::app() -> user -> setState('keenReadKey', $publisher -> keenreadkey);
				Yii::app() -> user -> setState('scriptVersion', $publisher -> scriptversion);
				Yii::app() -> user -> setState('enableReportingPageviews', $publisher -> enablereportingpageviews);
			}
    	}
		$this->render('index', array('view' => $view));
	}

	public function actionCharts() {
		$this->render('charts');
	}


	public function actionElements($view = "", $startdate = "", $enddate = "")
	{
		switch ($view) {
			case 'gender':
				$viewFile = '_dashboard_gender';
				break;
			case 'age':
				$viewFile = '_dashboard_age';
				break;
			case 'device':
				$viewFile = '_dashboard_device';
				break;
			case 'geo':
				$viewFile = '_dashboard_geo';
				break;
			case 'email':
				$viewFile = '_dashboard_email';
				break;
			default:
				$viewFile = '_dashboard_index';
		}

		Yii::app()->clientscript->scriptMap['jquery.js'] = false;

		date_default_timezone_set(Yii::app()->user->timezoneName);

		$time = new DateTime('now', new DateTimeZone(Yii::app()->user->timezoneName));
		$timezoneOffset = $time->format('P');

		$this->renderPartial($viewFile, array(
			'startdate' => strtotime($startdate),
			'enddate' => strtotime('23 hours 59 minutes' . $enddate),
			'timezoneOffset' => $timezoneOffset,
		));
	}


	public function getScenarioData($startDate, $endDate, $scenarioId) {
		$startdate = $this -> formatStartDate($startDate);
		$enddate = $this -> formatEndDate($endDate);

		$connection = Yii::app() -> db;

		$sql = "SELECT COUNT(*) as cnt FROM Scenarie
				WHERE time > :startdate AND time < :enddate AND Scenarie = :scenarioId";
				 	    

		$command = $connection -> createCommand($sql);
		$command -> bindValue(':scenarioId', $scenarioId);
		$command -> bindValue(':startdate', $startdate);
		$command -> bindValue(':enddate', $enddate);


		$result = $command -> queryAll();

		return $result;
	}



	/**
	 * Format a string representing a date range start date by appending hour, minutes and seconds.
	 * @param String $startdate The original start date string.
	 */
	private function formatStartDate($startdate) {
		// Check if $startdate is safe
		return $startdate . ' 00:00:00';
	}

	/**
	 * Format a string representing a date range end date by appending hour, minutes and seconds.
	 * @param string $enddate The original end date string.
	 */
	private function formatEndDate($enddate) {
		return $enddate . ' 23:59:59';
	}


	public function getSendgridStats($startdate, $enddate) {

		// get publisher credentials for sendgrid
		$publisherId = Yii::app()->user->publisherId;
		$publisher = Publisher::model()->findByPk($publisherId);
		$sendgridUsername = $publisher->sendgridusername;
		$sendgridPassword = $publisher->sendgridpassword;
		$subscriberApiUrl = $publisher->subscriberapiurl;

		$delivered = 0;
        $opens = 0;
        $clicks = 0;
        $bounces = 0;
        $subscribers = 0;
        $emailOpeningRate = 0;
		$emailCTR = 0;

		if (strlen($sendgridUsername) > 0 && strlen($sendgridPassword) > 0)
		    $enableSendgridReporting = true;
		else
		    $enableSendgridReporting = false;


		if ($enableSendgridReporting) {


		    $url = 'https://api.sendgrid.com/';


		    $time = new DateTime('now', new DateTimeZone('UTC'));

		    // ensure sendgrid enddate is not later than today's date UTC, otherwise api breaks
		    if (strtotime(date('Y-m-j', $enddate)) - strtotime($time->format('Y-m-j')) > 0) {
		        $sendgridEnddate = $time->format('Y-m-j');
		    } else {
		        $sendgridEnddate = date('Y-m-j', $enddate);
		    }


		    $params = array(
		        'api_user'  => $sendgridUsername,
		        'api_key'   => $sendgridPassword,
		        'start_date' => date('Y-m-j', $startdate),
		        'end_date' => $sendgridEnddate,
		        'aggregate' => '1',
		      );

		    //print_r($params);


		    $request =  $url.'api/stats.get.json';

		    // Generate curl request
		    $session = curl_init($request);
		    // Tell curl to use HTTP POST
		    curl_setopt ($session, CURLOPT_POST, true);
		    // Tell curl that this is the body of the POST
		    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
		    // Tell curl not to return headers, but do return the response
		    curl_setopt($session, CURLOPT_HEADER, false);
		    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

		    // obtain response
		    $response = curl_exec($session);
		    curl_close($session);


		    $data = json_decode($response, true);

		    

		    // disable sendgrip reporting if API credentials are not valid
		    if (array_key_exists('error', $data)) {
		        $enableSendgridReporting = false;
		        //print_r($data);
		    } else {

		        $delivered = $data['delivered'];
		        $opens = $data['opens'];
		        $clicks = $data['clicks'];
		        $bounces = $data['bounces'];

		        // calculate opening and click-through rates
		        if($delivered == 0)
		            $emailOpeningRate = 0;
		        else
		            $emailOpeningRate = round(($opens * 100) / $delivered, 2);

		        if($opens == 0)
		            $emailCTR = 0;
		        else
		            $emailCTR = round(($clicks * 100) / $opens, 2);
		    }    

		    // look up active subscriber count if API url is defined for publisher
		    if (strlen($subscriberApiUrl) > 0) {

		        // get number of active email subscribers from sharewall api
		        $request =  $subscriberApiUrl;

		        // Generate curl request
		        $session = curl_init($request);

		        // Tell curl not to return headers, but do return the response
		        curl_setopt($session, CURLOPT_HEADER, false);
		        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

		        // obtain response
		        $response = curl_exec($session);
		        curl_close($session);

		        $data = json_decode($response, true);

		        $subscribers = $data[0]['count'];
		    }

		}

        return array(
        	'enabled' => $enableSendgridReporting,
        	'delivered' => $delivered,
        	'opens' => $opens,
        	'clicks' => $clicks,
        	'bounces' => $bounces,
        	'subscribers' => $subscribers,
        	'openingRate' => $emailOpeningRate,
        	'ctr' => $emailCTR);


	}
	


}
