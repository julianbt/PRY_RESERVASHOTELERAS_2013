<?php
/* @var $this AlojamientoController */
/* @var $model Alojamiento */

$this->breadcrumbs=array(
	'Alojamientos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alojamiento', 'url'=>array('index')),
	array('label'=>'Create Alojamiento', 'url'=>array('create')),
	array('label'=>'Update Alojamiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alojamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alojamiento', 'url'=>array('admin')),
);
?>

<h1>View Alojamiento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero_alojamiento',
		'tipo_alojamiento',
		'estado',
	),
)); ?>
