<?php

//&expanded=1&filter_limit=30




/**
 * Download event data from piwik and dump them in mysql table
 */
class PiwikDownloader {

	

	public static function updatePiwikData() {

		// set end date to today and start date 7 days past
		$format = 'Y-m-j'; 
		$endDate = date ($format); 
		$startDate = date($format, strtotime('-7 day' . $endDate));


		self::getEventData($startDate, $endDate, 'Signup%2520completed&label[]=Signup%2520impression%20%26gt%3B%20%40scenario_3', 'Signup impression', '3');



		self::getEventData($startDate, $endDate, 'Signup%2520completed&label[]=Signup%2520completed%20%26gt%3B%20%40scenario_3_fb', 'Signup completed', '3_fb');


	}


	public static function getEventData($startDate, $endDate, $piwikLabel, $eventName, $scenario) {

		try {

			// this token is used to authenticate your API request.
			// You can get the token on the API page inside your Piwik interface
			$piwikToken = '2f0c833e9c37cd00f7aa8df52bc02413';

			// we call the REST API
			$url = "http://54.76.107.164/piwik/index.php";
			$url .= "?module=API&method=Events.getCategory";
			$url .= "&idSite=1&period=day&date=$startDate,$endDate";
			$url .= "&format=JSON&filter_limit=30&expanded=1";
			$url .= "&token_auth=$piwikToken";
			$url .= "&label[]=$piwikLabel";

			echo $url . '<br><br>';

			$response = file_get_contents($url);
			$data = json_decode($response, true);

			foreach ($data as $date=>$row) {

				// get event count
				$count = $row[0]['nb_events'];

				// check if record exist for this specific date, event name and scenario
				$model = Reporting::model()->findByAttributes(array('reportingdate' => $date, 'eventname' => $eventName, 'scenario' => $scenario));

				if ($model === null) {
					// record doesn't exist, create a new one
					$model = new Reporting;
					$model->eventname = $eventName;
					$model->scenario = $scenario;
					$model->reportingdate = $date;
				} else {
					// record exists - set update timestamp
					$model->updated = new CDbExpression('NOW()');
				}
				
				// set the event count and save record
				$model->count = $count;
				$model->save();


			}
			
		} catch (Exception $e) {
			throw $e;
		}
		
	}

}