<?php
class Marks extends CActiveRecord
{
	public function tableName()
	{
		return '{{marks}}';
	}

	public function rules()
	{
		return array(
			array('user_id, disciplin_id', 'required'),
			array('user_id, disciplin_id, mod1, mod2, trimestr', 'numerical', 'integerOnly'=>true),
			array('id, user_id, disciplin_id, mod1, mod2, trimestr', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'disciplin' => array(self::BELONGS_TO,'Disciplin','disciplin_id'),
			'user' => array(self::BELONGS_TO,'User','user_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'ФИО',
			'disciplin_id' => 'Дисциплина',
			'mod1' => 'Модуль',
			'mod2' => 'Семестр',
			'trimestr' => 'Сесія',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('disciplin_id',$this->disciplin_id);
		$criteria->compare('mod1',$this->mod1);
		$criteria->compare('mod2',$this->mod2);
		$criteria->compare('trimestr',$this->trimestr);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}