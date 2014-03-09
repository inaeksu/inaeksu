<?php $title = 'title_'.Localization::getLocale(); $this->pageTitle=$models->$title; ?>

<div id="contitle"><?php echo $models->$title; ?></div>	
	<div id="news">
		<div id="fdate"><?php echo date('j.m.Y', $models->date); ?></div>
	    <div id="context">
	    	<?php $text = 'text_'.Localization::getLocale(); echo $models->$text; ?>
	    </div>
</div>