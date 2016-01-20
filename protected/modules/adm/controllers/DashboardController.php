<?php

class DashboardController extends RController {

	public $layout = 'admin';

	public function filters() {
		return array('rights', );
	}


    public function actionIndex() {

		$this->render('index');
	}

	public function actionCharts() {

		$this->render('charts');
	}


	public function actionElements($startdate = "", $enddate = "")
	{

		$this->renderPartial("_dashboardelements", array(
			'startdate' => $startdate,
			'enddate' => $enddate
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


	


}
