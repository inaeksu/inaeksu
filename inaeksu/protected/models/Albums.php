<?php
class Albums extends CActiveRecord
{	
	public $image;

	public function tableName()
	{
		return '{{albums}}';
	}

	public function rules()
	{
		return array(
			array('name', 'required'),
			array('date', 'numerical', 'integerOnly'=>true),
			array('name, cover', 'length', 'max'=>115),
			array('image', 'file', 'types'=>'jpg, gif, png'),
			array('id, name, cover, date', 'safe', 'on'=>'search'),
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
			'cover' => 'Обложка',
			'image' => 'Обложка',
			'date' => 'Дата',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cover',$this->cover,true);
		$criteria->compare('date',$this->date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{
		if($this->isNewRecord)
			$this->date = time();
		return parent::beforeSave();
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