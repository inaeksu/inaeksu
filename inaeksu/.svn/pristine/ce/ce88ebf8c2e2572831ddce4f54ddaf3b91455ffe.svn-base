<ul class="maintabmenu">
   	<li class="current"><a href="#">Основное</a></li>
</ul>
<div class="content">
  <ul class="buttonlist">
   	<?php if(Yii::app()->user->checkAccess('1')) : ?>
	    <li><a href="/admin/default/backup"><button class="stdbtn">Бекап</button></a></li>
	   	<li><a href="/admin/default/clear"><button class="stdbtn">Очистить</button></a></li>
	   	<li><a href="/admin/default/update"><button class="stdbtn">Обновить</button></a></li>
    <?php endif ?>
   	<?php if(Yii::app()->user->checkAccess('2')) : ?>
	    <li><a href="/admin/statistic"><button class="stdbtn">Пропуски</button></a></li>
	   	<li><a href="/admin/marks"><button class="stdbtn">Оценки</button></a></li>
    <?php endif ?>
  </ul>	
</div>