<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->horario_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario_salida')); ?>:</b>
	<?php echo CHtml::encode($data->horario_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empleado_rol_id')); ?>:</b>
	<?php echo CHtml::encode($data->empleado_rol_id); ?>
	<br />


</div>