<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva')); ?>:</b>
	<?php echo CHtml::encode($data->reserva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_factura')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_factura')); ?>:</b>
	<?php echo CHtml::encode($data->total_factura); ?>
	<br />


</div>