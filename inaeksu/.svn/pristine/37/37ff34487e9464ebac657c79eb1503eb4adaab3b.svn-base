<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CORE</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/app/back/css/style.css" type="text/css">
    <link rel="shortcut icon" href="/app/back/images/favicon.ico" type="image/x-icon" />
</head>
<body>
	<div class="header">
    	<div class="headerinner">
            <a href="/admin"><img class="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/app/back/images/logo.png"></a>
            <div class="headright">
            	<div class="notiPanel">
                    <span class="notialert">
                    <?php if(Yii::app()->user->checkAccess('1')) : ?>
                        Администратор
                    <?php endif ?>
                    <?php if(Yii::app()->user->checkAccess('2')) : ?>
                        Модератор
                    <?php endif ?>						
					</span>          
                </div>
                <div class="userPanel">
                    <a href="/site/logout" class="userinfo">
                        Выход
                    </a>
                </div>
            </div>
        </div>
	</div>
	
    <div class="mainwrapper">
        <div class="mainleft">
          	<div class="mainleftinner">
              	<div class="leftmenu">
            		<ul>
                    <?php if(Yii::app()->user->checkAccess('1')) : ?>
                        <li><a href="/admin" class="widgets"><span><em>Основное</em></span></a></li>
                        <li><a href="/admin/article" class="widgets"><span><em>Новости</em></span></a></li>
                        <li><a href="/admin/page" class="widgets"><span><em>Страницы</em></span></a></li>
                        <li><a href="/admin/photos" class="widgets"><span><em>Фотогалерея</em></span></a></li>
                        <li><a href="/admin/statistic" class="widgets"><span><em>Пропуски</em></span></a></li>
                        <li><a href="/admin/marks" class="widgets"><span><em>Оценки</em></span></a></li>
                        <li><a href="/admin/disciplin" class="widgets"><span><em>Дисциплины</em></span></a></li>
                        <li><a href="/admin/group" class="widgets"><span><em>Группы</em></span></a></li>
                        <li><a href="/admin/user" class="widgets"><span><em>Пользователи</em></span></a></li>
                    <?php endif ?>
                    <?php if(Yii::app()->user->checkAccess('2')) : ?>
                        <li><a href="/admin/statistic" class="widgets"><span><em>Пропуски</em></span></a></li>
                        <li><a href="/admin/marks" class="widgets"><span><em>Оценки</em></span></a></li>
                    <?php endif ?> 	
                    </ul>
                        
                </div>
            </div>
        </div>
        <div class="maincontent">
                <?php echo $content; ?>
        </div> 	
    </div>	
</body>
</html>