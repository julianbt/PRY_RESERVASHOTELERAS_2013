<?php
/* @var $this HuespedController */
/* @var $model Huesped */

$this->breadcrumbs=array(
	'Huespeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Huesped', 'url'=>array('index')),
	array('label'=>'Manage Huesped', 'url'=>array('admin')),
);
?>

<h1>Create Huesped</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>