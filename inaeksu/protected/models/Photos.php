<?php
class Photos extends CActiveRecord
{
	public function tableName()
	{
		return '{{photos}}';
	}

	public function rules()
	{
		return array(
			array('album_id', 'required'),
			array('album_id', 'numerical', 'integerOnly'=>true),
			array('full', 'length', 'max'=>250),
			array('thumb', 'length', 'max'=>250),
			array('id, source, thumb', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'album' => array(self::BELONGS_TO,'Albums','album_id')
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'album_id' => 'Альбом',
			'full' => '800px',
			'thumb' => '138px',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('full',$this->full,true);
		$criteria->compare('thumb',$this->full,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}