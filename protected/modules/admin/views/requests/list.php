<?php
$this->menu=array(
	array('label'=>'Добавить','url'=>array('create')),
);
?>

<h1>Управление <?php echo $model->translition(); ?></h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'requests-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>TbHtml::GRID_TYPE_HOVER,
    'afterAjaxUpdate'=>"function() {sortGrid('requests')}",
    'rowHtmlOptionsExpression'=>'array(
        "id"=>"items[]_".$data->id,
        "class"=>"status_".$data->status,
    )',
	'columns'=>array(
		array(
			'name'=>'action',
			'type'=>'raw',
			'value'=>'Requests::getActions($data->action)'
		),
		'name',
		'phone',
		array(
			'name'=>'status',
			'type'=>'raw',
			'value'=>'Requests::getStatusAliases($data->status)',
			'filter'=>Requests::getStatusAliases()
		),
		array(
			'name'=>'create_time',
			'type'=>'raw',
			'value'=>'date("d.m.Y", strtotime($data->create_time))." в ".date("H:i", strtotime($data->create_time))'
		),
		array(
			'name'=>'update_time',
			'type'=>'raw',
			//'visible' => '$data->update_time != "0000-00-00 00:00:00"',
			'value'=>'$data->update_time != "0000-00-00 00:00:00" ? date("d.m.Y", strtotime($data->update_time))." в ".date("H:i", strtotime($data->update_time)) : date("d.m.Y", strtotime($data->create_time))." в ".date("H:i", strtotime($data->create_time))'
		),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

<?php Yii::app()->clientScript->registerScript('sortGrid', 'sortGrid("requests");', CClientScript::POS_END) ;?>