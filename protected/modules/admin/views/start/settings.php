

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'settings-form',
    'layout'=>TbHtml::FORM_LAYOUT_INLINE,
    'enableAjaxValidation'=>false,
)); ?>

<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, Yii::app()->user->getFlash('success')); ?>
    </div>
<?php endif; ?>

<?php if ( count($settings) > 0 ): ?>
    <?php foreach ($settings as $setting): ?>
        <div class="control-group">
            <label class="control-label" for="<?=$setting->option?>"><?=$setting->label?></label>
            <div class="controls">
                <?php if ( $setting->type == 'select' ): ?>
                    <?php
                    $rangeData = unserialize($setting->ranges);
                    if ( !is_array($rangeData) ) {
                        $rangeData = array();
                    }
                    ?>
                    <?php echo TbHtml::dropDownList("Settings[{$setting->option}]", "{$setting->value}", $rangeData, array(
                        'class'=>'span3',
                        'displaySize'=>1,
                        'empty'=>'Не задано',
                    )); ?>
                <?php elseif ( $setting->type == 'text' ): ?>
                    <textarea class="span3" maxlength="256" id="<?=$setting->option?>" name="Settings[<?=$setting->option?>]" cols="30" rows="4"><?=$setting->value?></textarea>
                <?php else: ?>
                    <input class="span3" maxlength="256" name="Settings[<?=$setting->option?>]" id="<?=$setting->option?>" value="<?=$setting->value?>" type="text">
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<div class="form-actions">
    <?php echo TbHtml::submitButton('Сохранить', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
    <?php echo TbHtml::resetButton('Сбросить'); ?>
</div>

<?php $this->endWidget(); ?>