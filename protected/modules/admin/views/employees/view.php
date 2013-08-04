<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Employees','url'=>array('index')),
	array('label'=>'Create Employees','url'=>array('create')),
	array('label'=>'Update Employees','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Employees','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employees','url'=>array('admin')),
);
?>

<h1>View Employees #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'photo',
		'fio',
		'position',
		'html_quote',
	),
)); ?>
