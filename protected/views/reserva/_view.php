<?php
/* @var $this ReservaController */
/* @var $data Reserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empleado_rol')); ?>:</b>
	<?php echo CHtml::encode($data->empleado_rol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alojamiento')); ?>:</b>
	<?php echo CHtml::encode($data->alojamiento); ?>
	<br />


</div>