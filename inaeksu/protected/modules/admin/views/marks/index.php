<ul class="maintabmenu">
   	<li class="current"><a href="#">Оценки</a></li>
</ul>
<div class="content">
  <ul class="buttonlist">
   	<li><a href="/admin/marks/select"><button class="stdbtn">Редактировать</button></a></li>
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
			'user_id' => array(
				'name' => 'user_id',
				'value' => '$data->user->fio',
			),
			'disciplin_id' => array(
				'name' => 'disciplin_id',
				'value' => '$data->disciplin->name',
			),
			'mod1' => array(
					'name' => 'mod1',
					'headerHtmlOptions' => array('width' => 70)
			),
			'mod2' => array(
					'name' => 'mod2',
					'headerHtmlOptions' => array('width' => 70)
			),
			'trimestr' => array(
					'name' => 'trimestr',
					'headerHtmlOptions' => array('width' => 70)
			),
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
				            'visible' => 'false',  
				        ),  
				    ),  
	        ),
	    ),
	)); ?>	
 </div>
 <br clear="all">
</div>