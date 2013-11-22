<?php
/* @var $this AlojamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alojamientos',
);

$this->menu=array(
	array('label'=>'Create Alojamiento', 'url'=>array('create')),
	array('label'=>'Manage Alojamiento', 'url'=>array('admin')),
);
?>

<h1>Alojamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
