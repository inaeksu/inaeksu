<?php $this->pageTitle='Персональна сторінка студента'; ?>

<div id="contitle"><?php echo Localization::getText('Персональна сторінка'); ?></div>
<div id="pages">
    <div id="context">
		<div class="form">
			<div id="login">
				<?php echo CHtml::beginForm(); ?>
				 
					<div class="row">
						<?php echo CHtml::activeTextField($model,'username',array('placeholder' => Localization::getText('Логін'))); ?>
						<span class="validerror"><?php echo $model->getError('username'); ?></span>
					</div>
					 
					<div class="row">
						<?php echo CHtml::activePasswordField($model,'password',array('placeholder' => Localization::getText('Пароль'))); ?>
						<span class="validerror"><?php echo $model->getError('password'); ?></span>
					</div>
					 
					<div class="row rememberMe">
						<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
						<?php echo CHtml::activeLabel($model, Localization::getText('Запам\'ятати')); ?>
					</div>
					 
					<div class="row submit">
						<?php echo CHtml::submitButton(Localization::getText('Вхід')); ?>
					</div>
				 
				<?php echo CHtml::endForm(); ?>
			</div>
		</div>
    </div>
</div>

