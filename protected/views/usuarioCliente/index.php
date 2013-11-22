<?php
/* @var $this UsuarioClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Clientes',
);

$this->menu=array(
	array('label'=>'Create UsuarioCliente', 'url'=>array('create')),
	array('label'=>'Manage UsuarioCliente', 'url'=>array('admin')),
);
?>

<h1>Usuario Clientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
