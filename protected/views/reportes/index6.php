<h2>REPORTE CLIENTES</h2>


<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'descripcion_tipo_persona'=>'Persona',
        'nombres'=>'Nombre',
        'apellidos'=>'Apellido',
        'numero_documento'=>'Identificacion',
        #'id',
        'reserva',
       # 'id',
        #`id`

    )
)); ?>
