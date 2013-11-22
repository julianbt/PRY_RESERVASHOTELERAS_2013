<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entrada'); ?>
		<?php echo $form->textField($model,'fecha_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_salida'); ?>
		<?php echo $form->textField($model,'fecha_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empleado_rol'); ?>
		<?php echo $form->textField($model,'empleado_rol',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alojamiento'); ?>
		<?php echo $form->textField($model,'alojamiento',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->