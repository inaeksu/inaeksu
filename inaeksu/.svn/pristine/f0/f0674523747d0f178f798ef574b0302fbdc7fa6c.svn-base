<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<br>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>