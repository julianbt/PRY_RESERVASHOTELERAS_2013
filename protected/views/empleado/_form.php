<?php
/* @var $this EmpleadoController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.

	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
    )); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_documento'); ?>
		<?php echo $form->textField($model,'numero_documento',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'numero_documento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_procedencia'); ?>
		<?php echo $form->textField($model,'lugar_procedencia',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lugar_procedencia'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'hoja_vida'); ?>
        <?php echo $form->fileField($model,'hoja_vida'); ?>
        <?php echo $form->error($model,'hoja_vida'); ?>
    </div>

	<div class="row">
		<?php   echo $form->labelEx($model,'tipo_persona'); ?>
		<?php   echo $form->textField($model,'tipo_persona',array('value'=>'1')); ?>
		<?php   echo $form->error($model,'tipo_persona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->