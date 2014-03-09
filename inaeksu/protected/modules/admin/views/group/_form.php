<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'group-form',
	'enableAjaxValidation'=>false,
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<br>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<b><?php echo $form->labelEx($model,'numdisc'); ?></b>
		<br>
		<?php echo $form->checkBoxList($model, 'numdisc', CHtml::listData(Disciplin::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'numdisc'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>