<?php
/* @var $this HuespedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Huespeds',
);

$this->menu=array(
	array('label'=>'Create Huesped', 'url'=>array('create')),
	array('label'=>'Manage Huesped', 'url'=>array('admin')),
);
?>

<h1>Huespedes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
