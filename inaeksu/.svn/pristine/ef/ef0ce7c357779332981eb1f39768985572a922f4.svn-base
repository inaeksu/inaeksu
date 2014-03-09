<?php
class User extends CActiveRecord
{	    
	public function tableName()
	{
		return '{{user}}';
	}

	public function rules()
	{
		return array(
			array('username, password, email, fio, group_id', 'required'),			
			array('username','unique'),
			array('email', 'email'),
			array('date, ban, role', 'numerical', 'integerOnly'=>true),
			array('username, password, fio', 'length', 'max'=>115),
			array('email', 'length', 'max'=>255),
			array('id, username, password, date, ban, role, email, fio, group_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'group' => array(self::BELONGS_TO,'Group','group_id')
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Логин',
			'password' => 'Пароль',
			'date' => 'Дата',
			'ban' => 'Бан',
			'fio' => 'ФИО',
			'role' => 'Роль',
			'email' => 'Email',
			'group_id' => 'Группа',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('date',$this->date);
		$criteria->compare('ban',$this->ban);
		$criteria->compare('fio',$this->fio);
		$criteria->compare('role',$this->role);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->date = time();
			$this->ban = 0;
			$this->role = 0;
		}
		$this->password = md5('//[[!@#$%^&*()_+]]//'.$this->password);
		return parent::beforeSave();
	}

	public static function all()
	{
		return CHtml::listData(self::model()->findAll(),'id','username');
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}