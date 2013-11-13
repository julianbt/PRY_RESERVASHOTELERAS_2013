<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_producto'); ?>
		<?php echo $form->textField($model,'descripcion_producto',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'descripcion_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto'); ?>
		<?php echo $form->error($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->textField($model,'iva'); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_servicio'); ?>
		<?php echo $form->textField($model,'tipo_servicio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipo_servicio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->