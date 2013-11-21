<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persona')); ?>:</b>
	<?php echo CHtml::encode($data->persona); ?>
	<br />


</div>