<ul class="maintabmenu">
   	<li class="current"><a href="#">Пользователи</a></li>
</ul>
<div class="content">
  <ul class="buttonlist">
   	<li><a href="/admin/user/create"><button class="stdbtn">Добавить</button></a></li>
  </ul>	                 
 <div class="main mborder">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
	    'id'=>'albums-grid',
	    'dataProvider'=>$model->search(),
	    'filter'=>$model,
	    'columns'=>array(
	       'id' => array(
				'name' => 'id',
				'headerHtmlOptions' => array('width' => 30)
			),
			'username',
			'ban'  => array(
				'name' => 'ban',
				'value' => '($data->ban==1)?"Да":"Нет"',
				'filter' => array(0 => "Нет", 1 => "Да"),
			),
			'role'  => array(
				'name' => 'role',
				'value' => '($data->role==0)?"User":"Admin"',
				'filter' => array(1 => "Admin", 0 => "User"),
			),
			'fio',
			'group_id' => array(
				'name' => 'group_id',
				'value' => '$data->group->name',
				'filter' => Group::all(),
				),
	        array(
	            'class'=>'CButtonColumn',
	            'htmlOptions'=>array('style'=>'width: 50px; text-align: center'), 
				    'buttons' => array(  
				        'view' => array(  
				            'visible' => 'false',  
				        ),  
				        'update' => array(  
				            'label' => 'Редактировать',  
				        ), 
				        'delete' => array(  
				            'label' => 'Удалить',  
				        ),  
				    ),  
	        ),
	    ),
	)); ?>	
 </div>
 <br clear="all">
</div>