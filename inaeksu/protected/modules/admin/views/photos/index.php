<ul class="maintabmenu">
   	<li class="current"><a href="#">Фотогалерея</a></li>
</ul>
<div class="content">
  <ul class="buttonlist">
   	<li><a href="/admin/photos/create"><button class="stdbtn">Добавить</button></a></li>
   	<li><a href="/admin/albums"><button class="stdbtn">Альбомы</button></a></li>
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
			'album_id' =>  array(
				'name' => 'album_id',
				'value' => '$data->album->name',
				'filter' => Albums::all(),
				),
			'thumb',
	        array(
	            'class'=>'CButtonColumn',
	            'htmlOptions'=>array('style'=>'width: 50px; text-align: center'), 
				    'buttons' => array(  
				        'view' => array(  
				            'visible' => 'false',  
				        ),  
				        'update' => array(  
				            'visible' => 'false',  
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