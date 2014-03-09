<div class="form">
<?php echo CHtml::beginForm(); ?>
<div id="statistic">
<?php echo "<b>".$info->fio."</b>"; ?>
<?php foreach($mas as $i=>$item): ?>
<div><b><?php echo $mas[$i]['disciplin']['name']; ?></b></div>
<table class="columbs">
<tr>
	<td style="text-align:center; font-weight:bold;">1 </td>
	<td style="text-align:center; font-weight:bold;">2 </td>
	<td style="text-align:center; font-weight:bold;">3</td>
</tr>
<tr>
	<td><?php echo CHtml::activeTextField($item,"[$i]mod1"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]mod2"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]trimestr"); ?></td>
</tr>
</table>
<?php endforeach; ?>
</div>
<?php echo CHtml::submitButton('Сохранить'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->