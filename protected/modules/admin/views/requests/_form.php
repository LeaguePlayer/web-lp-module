<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'requests-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>


	<?php echo $form->textFieldControlGroup($model,'action',array('class'=>'span8')); ?>

	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'phone',array('class'=>'span8','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', Requests::getStatusAliases(), array('class'=>'span8', 'displaySize'=>1)); ?>
	<div class="form-actions">
		<?php echo TbHtml::submitButton('Сохранить', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>        <?php echo TbHtml::linkButton('Отмена', array('url'=>'/admin/requests/list')); ?>
	</div>

<?php $this->endWidget(); ?>
