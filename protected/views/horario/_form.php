<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'horario_entrada'); ?>
		<?php echo $form->textField($model,'horario_entrada'); ?>
		<?php echo $form->error($model,'horario_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario_salida'); ?>
		<?php echo $form->textField($model,'horario_salida'); ?>
		<?php echo $form->error($model,'horario_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleado_rol_id'); ?>
		<?php echo $form->textField($model,'empleado_rol_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'empleado_rol_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->