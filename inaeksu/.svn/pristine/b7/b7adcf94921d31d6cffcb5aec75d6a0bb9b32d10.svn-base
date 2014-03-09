<?php
class Category extends CActiveRecord
{
	public function tableName()
	{
		return '{{category}}';
	}

	public function rules()
	{
		return array(
			array('title', 'required'),
			array('title', 'length', 'max'=>115),
			array('id, title', 'safe', 'on'=>'search'),
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
			'title' => 'Название',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function all()
	{
		return CHtml::listData(self::model()->findAll(),'id','title');
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}