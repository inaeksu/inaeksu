<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'photos-form',
  'enableAjaxValidation'=>false,
  'htmlOptions'=>array('enctype'=>'multipart/form-data'),
  )); ?>

  <?php echo $form->errorSummary($model); ?>

  <div class="row">
    <?php echo $form->labelEx($model,'Фото'); ?>
    <br>
    <? $this->widget('CMultiFileUpload', array(
        'name' => 'images',
        'accept' => 'jpeg|jpg|png', // jpeg|jpg|gif|png // useful for verifying files
        'duplicate' => 'Дублирующиеся фото', // useful, i think
        'denied' => 'Только jpeg,jpg,png', // useful, i think
        'htmlOptions' => array('multiple' => 'multiple'),
        'options'=>array(
                'afterFileSelect'=>'function(e ,v ,m){
                var fileSize = e.files[0].size;
                     if(fileSize>1*1024*1024){ 
                        alert("Максимальный размер 5 MB");
                      }

                    }'),              
      )); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'album_id'); ?>
    <br>
    <?php echo $form->dropDownList($model,'album_id',Albums::all()); ?>
    <?php echo $form->error($model,'album_id'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
  </div>

<?php $this->endWidget(); ?>

</div>