<?php
class Localization
{
	static function getText($text)
	{
		return Yii::t('main', $text, null, null, $_COOKIE['lang']);
	}
	
	static function getAllLangs()
	{
		return array('ua' => 'Українська', 'ru' => 'Русский', 'en' => 'English');
	}
	
	static function getLocale()
	{
		$langs = self::getAllLangs();
		if($langs[$_COOKIE['lang']])
		{
			return $_COOKIE['lang'];
		}
		return "ua";
	}
}
