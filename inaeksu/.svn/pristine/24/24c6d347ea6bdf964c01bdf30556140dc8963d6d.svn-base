<?php
class Group extends CActiveRecord
{
	public function tableName()
	{
		return '{{group}}';
	}

	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>115),
			array('numdisc', 'length', 'max'=>50),
			array('id, name, numdisc', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Название',
			'numdisc' => 'Дисциплины',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('numdisc',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function all()
	{
		return CHtml::listData(self::model()->findAll(),'id','name');
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	
}