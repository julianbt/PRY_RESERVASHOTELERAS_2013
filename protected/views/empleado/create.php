<?php
/* @var $this EmpleadoController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado  Personas', 'url'=>array('index')),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>Crear Nuevos Empleados </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
