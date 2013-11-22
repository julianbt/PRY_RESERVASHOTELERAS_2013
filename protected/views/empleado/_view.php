<?php
/* @var $this EmpleadoController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombres), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_documento')); ?>:</b>
	<?php echo CHtml::encode($data->numero_documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_procedencia')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_procedencia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hoja_vida')); ?>:</b>
	<?php echo CHtml::encode($data->hoja_vida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_persona')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_persona); ?>
	<br />

	*/ ?>

</div>