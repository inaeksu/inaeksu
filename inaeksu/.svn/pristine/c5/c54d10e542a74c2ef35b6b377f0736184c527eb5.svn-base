<?php $this->pageTitle=Yii::app()->name; ?>

<div id="slider">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/app/front/images/slider/1.jpg" />
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/app/front/images/slider/2.jpg" />
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/app/front/images/slider/3.jpg" />        
</div>

<script>
    $('#slider').coinslider();
</script>

<div id="contitle"><?php echo Localization::getText('Новини'); ?></div>
<?php
	$title_l = 'title_'.Localization::getLocale();
	$text_l = 'text_'.Localization::getLocale();
	foreach($models as $one)
	{
		echo '<div id="news">';
		echo CHtml::link("<h1>".$one->$title_l."</h1>",array('article/view/', 'id' => $one->id));
        echo '<div id="date">'.date('j.m.Y', $one->date).'</div>';
        $text = strip_tags($one->$text_l);
        $res = strlen($text);
        if($res > 350){
    		echo '<div id="context">'.mb_substr($text,0,350,'utf-8').'...'.'</div>';
    	}
    	else 
        {
    		echo '<div id="context">'.$text.'</div>';
    	}
		echo "</div>";

	}

	if(!$models)
	{  
        echo '<div id="news">';
        echo Localization::getText('Новин немає');
        echo "</div>";	
	}
?>

<div id="pagemenu">
    <?php $this->widget('CLinkPager', array(
        "cssFile" => false,
        'pages' => $pages,
    )); ?>
</div>