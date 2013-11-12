<?php
/* @var $this TipoServicioController */
/* @var $data TipoServicio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_tipo_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_tipo_servicio); ?>
	<br />


</div>