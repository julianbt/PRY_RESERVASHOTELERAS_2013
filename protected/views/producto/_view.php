<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_producto')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_producto')); ?>:</b>
	<?php echo CHtml::encode($data->precio_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_servicio); ?>
	<br />


</div>