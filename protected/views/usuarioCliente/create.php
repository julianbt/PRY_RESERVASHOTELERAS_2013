<?php
/* @var $this UsuarioClienteController */
/* @var $model UsuarioCliente */

$this->breadcrumbs=array(
	'Usuario Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioCliente', 'url'=>array('index')),
	array('label'=>'Manage UsuarioCliente', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>