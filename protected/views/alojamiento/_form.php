<?php
/* @var $this AlojamientoController */
/* @var $model Alojamiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alojamiento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_alojamiento'); ?>
		<?php echo $form->textField($model,'numero_alojamiento',array('size'=>15,'maxlength'=>15)); ?>

		<?php echo $form->error($model,'numero_alojamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_alojamiento'); ?>
		
			<?php echo $form->dropDownList($model,'tipo_alojamiento',CHtml::listData(TipoAlojamiento::model()->findAll(),"id","descripcion_tipo_alojamiento")); ?>
		<?php echo $form->error($model,'tipo_alojamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		
		<?php echo $form->dropDownList($model,'estado',CHtml::listData(Estado::model()->findAll(),"id","estado")); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->