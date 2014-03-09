<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'albums-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<br>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<br>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>