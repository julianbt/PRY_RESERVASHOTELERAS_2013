<?php
/* @var $this UsuarioClienteController */
/* @var $model UsuarioCliente */

$this->breadcrumbs=array(
	'Usuario Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsuarioCliente', 'url'=>array('index')),
	array('label'=>'Create UsuarioCliente', 'url'=>array('create')),
	array('label'=>'Update UsuarioCliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsuarioCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioCliente', 'url'=>array('admin')),
);
?>

<h1>View UsuarioCliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'huesped',
		'usuario',
		'contrasena',
	),
)); ?>
