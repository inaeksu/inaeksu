<?php
class Article extends CActiveRecord
{
	public function tableName()
	{
		return '{{article}}';
	}

	public function rules()
	{
		return array(
			array('title_ua, text_ua, title_ru, text_ru, title_en, text_en, category_id', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('title_'.Localization::getLocale(), 'length', 'max'=>200),
			array('id, title_ua, text_ua, title_ru, text_ru, title_en, text_en, date, category_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'category' => array(self::BELONGS_TO,'Category','category_id')
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
			'category_id' => 'Категория',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('category_id',$this->category_id);

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
		return CHtml::listData(self::model()->findAll(),'id',$title);
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	
}