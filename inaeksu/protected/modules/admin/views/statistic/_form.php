<div class="form">
<?php echo CHtml::beginForm(); ?>
<div id="statistic">

<?php foreach($mas as $i=>$item): ?>

<div><b><?php echo $mas[$i]['user']['fio']; ?></b></div>
<table class="columbs">
<tr>
	<td style="text-align:center; font-weight:bold;">1</td>
	<td style="text-align:center; font-weight:bold;">2</td>
	<td style="text-align:center; font-weight:bold;">3</td>
	<td style="text-align:center; font-weight:bold;">4</td>
	<td style="text-align:center; font-weight:bold;">5</td>
	<td style="text-align:center; font-weight:bold;">6</td>
	<td style="text-align:center; font-weight:bold;">7</td>
	<td style="text-align:center; font-weight:bold;">8</td>
	<td style="text-align:center; font-weight:bold;">9</td>
	<td style="text-align:center; font-weight:bold;">10</td>
	<td style="text-align:center; font-weight:bold;">11</td>
	<td style="text-align:center; font-weight:bold;">12</td>
	<td style="text-align:center; font-weight:bold;">13</td>
	<td style="text-align:center; font-weight:bold;">14</td>
	<td style="text-align:center; font-weight:bold;">15</td>
	<td style="text-align:center; font-weight:bold;">16</td>
</tr>
<tr>
	<td><?php echo CHtml::activeTextField($item,"[$i]week1"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week2"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week3"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week4"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week5"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week6"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week7"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week8"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week9"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week10"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week11"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week12"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week13"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week14"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week15"); ?></td>
	<td><?php echo CHtml::activeTextField($item,"[$i]week16"); ?></td>
</tr>
</table>
<?php endforeach; ?>
</div>
<?php echo CHtml::submitButton('Сохранить'); ?>
<?php echo CHtml::endForm(); ?>
</div><!-- form -->