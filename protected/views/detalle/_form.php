<?php
/* @var $this DetalleController */
/* @var $model Detalle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detalle-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'factura'); ?>
        <?php echo $form->dropDownList($model,'factura',CHtml::listData(Reserva::model()->findAll(),"id","id")); ?>
        <?php echo $form->error($model,'factura'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'producto'); ?>
        <?php echo $form->dropDownList($model,'producto',CHtml::listData(Reserva::model()->findAll(),"id","descripcion_producto")); ?>
        <?php echo $form->error($model,'producto'); ?>
    </div>



    <div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>





	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->