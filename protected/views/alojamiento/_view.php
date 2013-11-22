<?php
/* @var $this AlojamientoController */
/* @var $data Alojamiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_alojamiento')); ?>:</b>
	<?php echo CHtml::encode($data->numero_alojamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_alojamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_alojamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>