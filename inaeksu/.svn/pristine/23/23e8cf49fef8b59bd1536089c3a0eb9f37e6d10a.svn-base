<?php

class Page extends CActiveRecord
{
	public function tableName()
	{
		return '{{page}}';
	}

	public function rules()
	{
		return array(
			array('title_ua, text_ua, title_ru, text_ru, title_en, text_en, surl', 'required'),
			array('date', 'numerical', 'integerOnly'=>true),
			array('id, surl, title_ua, text_ua, title_ru, text_ru, title_en, text_en, date', 'safe', 'on'=>'search'),
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
			'title_ua' => 'Назва',
			'title_ru' => 'Название',
			'title_en' => 'Name',
			'text_ua' => 'Текст',
			'text_ru' => 'Текст',
			'text_en' => 'Text',
			'date' => 'Дата',
			'surl' => 'URL'
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;
		$title = 'title_'.Localization::getLocale();
		$text = 'text_'.Localization::getLocale();
		
		$criteria->compare('id',$this->id);
		$criteria->compare($title,$this->$title,true);
		$criteria->compare($text,$this->$text,true);
		$criteria->compare('surl',$this->surl,true);
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
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}