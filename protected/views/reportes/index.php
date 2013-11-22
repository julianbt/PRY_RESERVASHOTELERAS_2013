<h2>REPORTE CLIENTES</h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'nombres'=>'Nombre',
        'apellidos'=> 'Apellido',
        ' numero_documento'=> 'Identificacion',
        'fecha_entrada',
        'fecha_salida',
        #'id',
        'descripcion_tipo_persona'=> 'Persona',
        #'id'
    )
)); ?>