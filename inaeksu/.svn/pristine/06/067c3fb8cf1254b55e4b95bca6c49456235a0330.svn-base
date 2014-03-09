<?php $this->pageTitle="Фотогалерея"; ?>

<div id="contitle">Фотогалерея</div>
<div id="albumpage">
    <div id="context">
    <?php
    	foreach($models as $one)
			{	
				echo "<div class='albumlist'>";
				echo CHtml::link("<img class='cover' src=".$one->cover.">",array('view', 'id' => $one->id));
				$res = strlen($one->name);
		        if($res > 30){
		    		echo CHtml::link("<span class='albumname'><h1>".mb_substr($one->name,0,20,'utf-8').'...'."</h1></span>",
		    	         array('view', 'id' => $one->id));
		    	}
		    	else {
		    		echo CHtml::link("<span class='albumname'><h1>".$one->name."</h1></span>",array('view', 'id' => $one->id));
		    	}
				
				echo "</div>";
			}
	?>
	<br clear="all">
    </div>
</div>