<h2>REPORTE RESERVA</h2>


<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        #'id',
        'nombres'=>'Nombre',
        'apellidos'=>'Apellido',
        'reserva'

    )
)); ?>
