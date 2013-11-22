<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factura-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reserva'); ?>
        <?php echo $form->dropDownList($model,'reserva',CHtml::listData(Reserva::model()->findAll(),"id","id")); ?>
        <?php echo $form->error($model,'reserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_factura'); ?>
		<?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'options'=>array(
                'showAnim'=>'fold',
            ),
            'model'=>$model,
            'attribute'=>'fecha_factura',
            'htmlOptions'=>array(
                'class'=>'betterform',
                'tabindex'=>3
            ),
            'options'=>array(
                'dateFormat'=>'yy-mm-dd',
                'showButtonPanel'=>true,
                'changeMonth'=>true,
                'changeYear'=>true,
                'defaultDate'=>'+1w',
            ),
        ));
        ?>
		<?php echo $form->error($model,'fecha_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_factura'); ?>
		<?php echo $form->textField($model,'total_factura'); ?>
		<?php echo $form->error($model,'total_factura'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->