<h2>REPORTE FACTURA</h2>


<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        #'id',
        'numero_alojamiento',
        'nombres',
        'numero_documento',
        'apellidos',
        #'tipo_alojamiento',
        'descripcion_tipo_alojamiento',
        'fecha_entrada',
        'fecha_salida',
        'tarifa_alojamiento',
        'fecha_factura',
        #'reserva',
        'total_factura',
        'cantidad',
        'descripcion_producto',
        'precio_producto',
        'iva',
        'descripcion_tipo_servicio'

    )
)); ?>
