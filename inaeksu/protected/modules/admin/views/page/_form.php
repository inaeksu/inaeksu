<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	'enableAjaxValidation'=>false,
	)); ?>

	<?php echo $form->errorSummary($model); ?>
	
		<div class="row">
		<?php echo $form->labelEx($model,'surl'); ?>
		<br>
		<?php echo $form->textField($model,'surl',array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'surl'); ?>
	</div>

	<?php foreach(Localization::getAllLangs() as $key=>$value){ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title_'.$key); ?>
		<br>
		<?php echo $form->textField($model,'title_'.$key,array('size'=>60,'maxlength'=>115)); ?>
		<?php echo $form->error($model,'title_'.$key); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_'.$key); ?>
		<?php
		Yii::import('ext.imperavi-redactor-widget-master.ImperaviRedactorWidget');
		$this->widget('ImperaviRedactorWidget', array(
		    'model' => $model,
		    'attribute' => 'text_'.$key,

		    'plugins' => array(
        		'fullscreen' => array(
            		'js' => array('fullscreen.js'),
            	),
       		 ),

		    'htmlOptions' => array('style' => 'height:300px;'),

		    'options' => array(
		        //'lang' => 'ru',
		        'toolbar' => true,
		        'iframe' => true,
		        'imageUpload' => Yii::app()->params['site_url'].'/admin/file/uploadimg',
		        'fileUpload' => Yii::app()->params['site_url'].'/admin/file/uploadfile',
		    ),
		));
		?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<?php } ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>