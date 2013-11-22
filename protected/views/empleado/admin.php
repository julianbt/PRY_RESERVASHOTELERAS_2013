<?php
/* @var $this EmpleadoController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listado Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleados', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Empleados</h1>

<p>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id',
		'nombres',
		'apellidos',
		'numero_documento',
		'celular',
		'email',
		/*
		'lugar_procedencia',
		'hoja_vida',
		'tipo_persona',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
