<ul class="maintabmenu">
   	<li class="current"><a href="#">Пропуски</a></li>
</ul>
<div class="content">
  <ul class="buttonlist">
   	<li><a href="/admin/statistic/select"><button class="stdbtn">Редактировать</button></a></li>
  </ul>	                 
 <div class="main mborder">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
	    'id'=>'albums-grid',
	    'dataProvider'=>$model->search(),
	    'filter'=>$model,
	    'columns'=>array(
			'user_id' => array(
				'name' => 'user_id',
				'value' => '$data->user->fio',
				),
			'week1',
			'week2',
			'week3',
			'week4',
			'week5',
			'week6',
			'week7',
			'week8',
			'week9',
			'week10',
			'week11',
			'week12',
			'week13',
			'week14',
			'week15',
			'week16',
	        array(
	            'class'=>'CButtonColumn',
	            'htmlOptions'=>array('style'=>'width: 10px; text-align: center'), 
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