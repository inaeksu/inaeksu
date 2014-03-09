<ul class="maintabmenu">
   	<li class="current"><a href="#">Категории</a></li>
</ul>
<div class="content">
  <ul class="buttonlist">
   	<li><a href="/admin/category/create"><button class="stdbtn">Добавить</button></a></li>
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
			'title',
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
