<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reserva-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_entrada'); ?>
		<?php echo $form->textField($model,'fecha_entrada'); ?>
		<?php echo $form->error($model,'fecha_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_salida'); ?>
		<?php echo $form->textField($model,'fecha_salida'); ?>
		<?php echo $form->error($model,'fecha_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleado_rol'); ?>
		<?php echo $form->textField($model,'empleado_rol',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'empleado_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alojamiento'); ?>
		<?php echo $form->textField($model,'alojamiento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'alojamiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->