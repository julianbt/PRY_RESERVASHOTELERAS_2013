<?php
/* @var $this UsuarioClienteController */
/* @var $model UsuarioCliente */

$this->breadcrumbs=array(
	'Usuario Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioCliente', 'url'=>array('index')),
	array('label'=>'Create UsuarioCliente', 'url'=>array('create')),
	array('label'=>'View UsuarioCliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsuarioCliente', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioCliente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>