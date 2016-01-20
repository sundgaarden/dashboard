<?php


class ReportingBase extends CActiveRecord
{


	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{reporting_event}}';
	}


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('name, sendgridusername, sendgridpassword', 'length', 'max'=>255),
			//array('piwiksiteid', 'numerical', 'integerOnly'=>true),
            array('id, eventname, scenario, count, reportingdate, updated','safe'),
		);
	}


}