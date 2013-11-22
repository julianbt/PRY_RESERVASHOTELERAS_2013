<h2>REPORTE DETALLES</h2>


<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'cantidad',
        'descripcion_producto',
        'precio_producto',
        'iva',
        'descripcion_tipo_servicio'

    )
)); ?>
