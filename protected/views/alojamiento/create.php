<?php
/* @var $this AlojamientoController */
/* @var $model Alojamiento */

$this->breadcrumbs=array(
	'Alojamientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alojamiento', 'url'=>array('index')),
	array('label'=>'Manage Alojamiento', 'url'=>array('admin')),
);
?>

<h1>Create Alojamiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>