<h2>REPORTE ALOJAMIENTOS MAS RESERVADOS</h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        #'id',
        'descripcion_tipo_alojamiento'=>'Alojamiento',
        #'tipo_alojamiento',
    )
)); ?>