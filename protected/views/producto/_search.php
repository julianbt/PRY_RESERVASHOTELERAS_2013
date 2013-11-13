<?php
/* @var $this ProductoController */
/* @var $model Producto */
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
		<?php echo $form->label($model,'descripcion_producto'); ?>
		<?php echo $form->textField($model,'descripcion_producto',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iva'); ?>
		<?php echo $form->textField($model,'iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_servicio'); ?>
		<?php echo $form->textField($model,'tipo_servicio',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->