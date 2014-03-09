<div class="form">
<?php echo CHtml::beginForm(); ?>
<div id="statistic">

<?php foreach($model as $i=>$item): ?>

<div><b><?php echo "<a href='/admin/marks/allresult/id/".$model[$i]['id']."'>".$model[$i]['name']."</a>"; ?></b></div>

<?php endforeach; ?>
</div>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->