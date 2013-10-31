<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'request-form',
    'action' => '/requests/send',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'htmlOptions' => array(
    	'class' => 'request'
    )
)); ?>

	<?php //echo $form->errorSummary($model); ?>
	<h2>Отправить заявку</h2>

    <?php echo CHtml::label('', 'pick_name', array('class' => 'label_name')); ?>
    <?php echo $form->textField($model,'name', array('id' => 'pick_name', 'placeholder' => 'Введите имя*:')); ?>
    <?php echo $form->error($model,'name'); ?>

    <?php echo CHtml::label('', 'pick_phone', array('class' => 'label_phone')); ?>
    <?php $this->widget('CMaskedTextField', array(
		'model' => $model,
		'attribute' => 'phone',
		'mask' => '+7 999 999 99 99',
		'htmlOptions' => array('id' => 'pick_phone', 'placeholder' => 'Введите телефон*:', 'size' => 16)
	)); ?>
    <?php echo $form->error($model,'phone'); ?>

    <div class="button_wrap">
    	<?php echo CHtml::submitButton('Отправить', array('class' => 'orange_button'));?>
	</div>
	<p class="request_line"></p>
	<p class="trust lock">Мы несем ответственность за безопасность Ваших даных!</p>
	<p class="trust clock">Мы несем ответственность за безопасность Ваших даных!</p>

<?php $this->endWidget(); ?>