<?php
class Statistic extends CActiveRecord
{
	public function tableName()
	{
		return '{{statistic}}';
	}

	public function rules()
	{
		return array(
			array('user_id', 'required'),
			array('user_id, week1, week2, week3, week4, week5, week6, week7, week8, week9, week10, week11, week12, week13, week14, week15, week16', 'numerical', 'integerOnly'=>true),
			array('id, user_id, week1, week2, week3, week4, week5, week6, week7, week8, week9, week10, week11, week12, week13, week14, week15, week16', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'user' => array(self::BELONGS_TO,'User','user_id')
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'ФИО',
			'week1' => '1',
			'week2' => '2',
			'week3' => '3',
			'week4' => '4',
			'week5' => '5',
			'week6' => '6',
			'week7' => '7',
			'week8' => '8',
			'week9' => '9',
			'week10' => '10',
			'week11' => '11',
			'week12' => '12',
			'week13' => '13',
			'week14' => '14',
			'week15' => '15',
			'week16' => '16',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('week1',$this->week1);
		$criteria->compare('week2',$this->week2);
		$criteria->compare('week3',$this->week3);
		$criteria->compare('week4',$this->week4);
		$criteria->compare('week5',$this->week5);
		$criteria->compare('week6',$this->week6);
		$criteria->compare('week7',$this->week7);
		$criteria->compare('week8',$this->week8);
		$criteria->compare('week9',$this->week9);
		$criteria->compare('week10',$this->week10);
		$criteria->compare('week11',$this->week11);
		$criteria->compare('week12',$this->week12);
		$criteria->compare('week13',$this->week13);
		$criteria->compare('week14',$this->week14);
		$criteria->compare('week15',$this->week15);
		$criteria->compare('week16',$this->week16);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}