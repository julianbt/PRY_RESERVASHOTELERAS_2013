<?php
/* @var $this HuespedController */
/* @var $model Huesped */

$this->breadcrumbs=array(
	'Huespeds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Huesped', 'url'=>array('index')),
	array('label'=>'Create Huesped', 'url'=>array('create')),
	array('label'=>'Update Huesped', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Huesped', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Huesped', 'url'=>array('admin')),
);
?>

<h1>Huesped: <?php echo $model->nombres." ".$model->apellidos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		#'nombres',
		#'apellidos',
		'numero_documento',
		'celular',
		'email',
		'lugar_procedencia',
	),
)); ?>
