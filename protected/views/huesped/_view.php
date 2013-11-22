<?php
/* @var $this HuespedController */
/* @var $data Huesped */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombres)." ".CHtml::encode($data->apellidos), array('view', 'id'=>$data->id)); ?>
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


</div>