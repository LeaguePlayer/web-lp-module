<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'requests-form',
    'action' => $this->createUrl('requests/send'),
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions' => array(
        'validateOnSubmit'=>true,
        'validateOnChange'=>true,
        'validateOnType'=>false,
        'afterValidate'=>'js:requestValidation', // Your JS function to submit form
	),
    'htmlOptions' => array(
    	'class' => 'request'
    )
)); ?>

	<?php //echo $form->errorSummary($model); ?>
	<h2>Отправить заявку</h2>

    <?php echo CHtml::label('', 'pick_name', array('class' => 'label_name')); ?>
    <?php echo $form->textField($model,'name', array('placeholder' => 'Введите имя*:')); ?>
    <div style="display: none;"><?php echo $form->error($model,'name'); ?></div>

    <?php echo CHtml::label('', 'pick_phone', array('class' => 'label_phone')); ?>
    <?php $this->widget('CMaskedTextField', array(
		'model' => $model,
		'attribute' => 'phone',
		'mask' => '+7 999 999 99 99',
		'htmlOptions' => array('placeholder' => 'Введите телефон*:', 'size' => 16)
	)); ?>
    <div style="display: none;"><?php echo $form->error($model,'phone'); ?></div>
	
	<?php echo $form->hiddenField($model,'action', array('value' => 1));?>

    <div class="button_wrap">
    	<?php echo CHtml::submitButton('Отправить', array('class' => 'orange_button'));?>
	</div>
	<p class="request_line"></p>
	<div class="trust lock"><p>Мы несем ответственность за безопасность Ваших даных!</p></div>
	<div class="trust clock"><p>Мы свяжемся с Вами в течение 24 часов</p></div>

<?php $this->endWidget(); ?>
<?php
	$cs = Yii::app()->clientScript;

	$cs->registerScript('req-form', '
		var requestValidation = function(form, data, hasError){
			if(hasError){
				var tips = [];

				var opt = {
					style: "alert",
					target: true,
					stem: true,
					showOn: "creation",
					tipJoint: "left"
				};
				
				for(id in data){
					var t = new Opentip($("#" + id), opt);
					t.setContent(data[id].pop());
					tips.push(t);
					t.show();
				}
			}else{
				var form = $("#requests-form");
				$.ajax({
					url: form.attr("action"),
					data: form.serialize(),
					type: "POST",
					success: function(){
						form.find(":text").val("");
						form.find("#Requests_action").val(1);
						$.fancybox.open("<h2>Спасибо!</h2><p>Мы постараемся обработать Вашу заявку максимально быстро! Ожидайте звонка специалиста.</p>", {maxWidth: 300});
					}
				});
			}
		};
	', CClientScript::POS_END);
?>