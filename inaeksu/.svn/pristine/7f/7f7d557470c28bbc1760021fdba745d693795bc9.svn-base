<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
    )); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
        <br>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
        <br>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
        <br>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fio'); ?>
        <br>
		<?php echo $form->textField($model,'fio',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'fio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
        <br>
		<?php echo $form->dropDownList($model,'group_id',Group::all()); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

