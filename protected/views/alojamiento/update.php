<?php
/* @var $this AlojamientoController */
/* @var $model Alojamiento */

$this->breadcrumbs=array(
	'Alojamientos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alojamiento', 'url'=>array('index')),
	array('label'=>'Create Alojamiento', 'url'=>array('create')),
	array('label'=>'View Alojamiento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alojamiento', 'url'=>array('admin')),
);
?>

<h1>Update Alojamiento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>