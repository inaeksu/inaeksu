<?php
class Disciplin extends CActiveRecord
{
	public function tableName()
	{
		return '{{disciplin}}';
	}

	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name','filter','filter'=>'strip_tags'),
			array('name', 'length', 'max'=>115),
			array('id, name', 'safe', 'on'=>'search'),
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
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}