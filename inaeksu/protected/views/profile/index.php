<?php $this->pageTitle=$profile->fio; ?>

<div id="contitle"><?php echo $profile->fio; ?> | <?php echo $profile->group->name; ?></div>
<div id="pages">
    <div id="context">
    <div id="proline">Пропуски по тижням</div>
	<table class="weeks" border="1">
		<thead>
          <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
          </tr>
        </thead>
    	<tbody>
    		<tr>
    			<td><?php echo $statistic->week1; ?></td>
    			<td><?php echo $statistic->week2; ?></td>
    			<td><?php echo $statistic->week3; ?></td>
    			<td><?php echo $statistic->week4; ?></td>
    			<td><?php echo $statistic->week5; ?></td>
    			<td><?php echo $statistic->week6; ?></td>
    			<td><?php echo $statistic->week7; ?></td>
    			<td><?php echo $statistic->week8; ?></td>
    			<td><?php echo $statistic->week9; ?></td>
    			<td><?php echo $statistic->week10; ?></td>
    			<td><?php echo $statistic->week11; ?></td>
    			<td><?php echo $statistic->week12; ?></td>
    			<td><?php echo $statistic->week13; ?></td>
    			<td><?php echo $statistic->week14; ?></td>
    			<td><?php echo $statistic->week15; ?></td>
    			<td><?php echo $statistic->week16; ?></td>
    		</tr>
    	</tbody>
    </table>
    
    <div id="proline">Оцінки</div>
    <table class="marks" border="1">
		<thead>
          <tr>
            <th>Предмет</th>
            <th>Модуль</th>
            <th>Семестр</th>
            <th>Сесія</th>
          </tr>
        </thead>
    	<tbody>
	    	<?php
		    	foreach($marks as $one) {
		    		echo "<tr>";
		    		echo "<td>".$one->disciplin->name."</td>";
		    		echo "<td>".$one->mod1."</td>";
		    		echo "<td>".$one->mod2."</td>";
		    		echo "<td>".$one->trimestr."</td>";
		    		echo "</tr>";
		   		 }
	   		?>
    	</tbody>
    </table>
    </div>
</div>