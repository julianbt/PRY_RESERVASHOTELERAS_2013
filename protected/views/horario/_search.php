<?php
/* @var $this HorarioController */
/* @var $model Horario */
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
		<?php echo $form->label($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario_salida'); ?>
		<?php echo $form->textField($model,'horario_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empleado_rol_id'); ?>
		<?php echo $form->textField($model,'empleado_rol_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->