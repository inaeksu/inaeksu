<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'name'); ?>
<div><?php echo CHtml::activeTextField($model,'name'); ?></div>
</div>

<div class="row submit">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div>