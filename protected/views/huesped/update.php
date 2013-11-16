<?php
/* @var $this HuespedController */
/* @var $model Huesped */

$this->breadcrumbs=array(
	'Huespeds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Huesped', 'url'=>array('index')),
	array('label'=>'Create Huesped', 'url'=>array('create')),
	array('label'=>'View Huesped', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Huesped', 'url'=>array('admin')),
);
?>

<h1>Update Huesped <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>