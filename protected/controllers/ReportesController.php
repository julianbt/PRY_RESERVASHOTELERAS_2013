<?php

class ReportesController extends Controller
{

    public function actionIndex()
    { $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM rol')->queryScalar();
        $sql='SELECT
persona.nombres,
reserva.fecha_entrada,
reserva.fecha_salida,
persona.apellidos,
persona.numero_documento,
persona.id,
tipo_persona.descripcion_tipo_persona,
tipo_persona.id
FROM
persona
INNER JOIN tipo_persona ON tipo_persona.id = persona.tipo_persona
INNER JOIN huesped_reserva ON persona.id = huesped_reserva.huesped
INNER JOIN reserva ON reserva.id = huesped_reserva.reserva
';
        $dataProvider=new CSqlDataProvider($sql, array(
            'keyField'=>'id',
            'totalItemCount'=>$count,
            'sort'=>array(
                'attributes'=>array(
                    'nombres',
                    'fecha_entrada',
                    'fecha_salida',
                    'apellidos',
                    ' numero_documento',
                     'id',
                    'descripcion_tipo_persona',
                   'id'
                ),
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index', array(
            'dataProvider'=>$dataProvider,
        ));}


    public function actionReservado()
    {
        $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM rol')->queryScalar();
        $sql='SELECT
`tipo_alojamiento`.`id`,
  `tipo_alojamiento`.`descripcion_tipo_alojamiento`,
  `alojamiento`.`tipo_alojamiento`
FROM
  `reserva`
  INNER JOIN `alojamiento` ON (`reserva`.`alojamiento` = `alojamiento`.`id`)
  INNER JOIN `tipo_alojamiento` ON (`alojamiento`.`tipo_alojamiento` = `tipo_alojamiento`.`id`)
';
        $dataProvider=new CSqlDataProvider($sql, array(
            'keyField'=>'id',
            'totalItemCount'=>$count,
            'sort'=>array(
                'attributes'=>array(
                    'id',
                    'descripcion_tipo_alojamiento',
                    'tipo_alojamiento',
                ),
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index2', array(
            'dataProvider'=>$dataProvider,
        ));
    }


    public function actionalojamiento()
    {
        $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM rol')->queryScalar();
        $sql3='SELECT
   `persona`.`id`,
  `alojamiento`.`numero_alojamiento`,
  `persona`.`nombres`,
  `persona`.`numero_documento`,
  `persona`.`apellidos`,
  `alojamiento`.`tipo_alojamiento`,
  `tipo_alojamiento`.`descripcion_tipo_alojamiento`,
  `reserva`.`fecha_entrada`,
  `reserva`.`fecha_salida`,
  `tipo_alojamiento`.`tarifa_alojamiento`,
  `factura`.`fecha_factura`,
  `factura`.`reserva`,
  `factura`.`total_factura`,
  `detalle`.`cantidad`,
  `producto`.`descripcion_producto`,
  `producto`.`precio_producto`,
  `producto`.`iva`,
  `tipo_servicio`.`descripcion_tipo_servicio`
FROM
  `persona`
  INNER JOIN `tipo_persona` ON (`persona`.`tipo_persona` = `tipo_persona`.`id`)
  INNER JOIN `huesped_reserva` ON (`persona`.`id` = `huesped_reserva`.`huesped`)
  INNER JOIN `reserva` ON (`huesped_reserva`.`reserva` = `reserva`.`id`)
  INNER JOIN `alojamiento` ON (`reserva`.`alojamiento` = `alojamiento`.`id`)
  INNER JOIN `tipo_alojamiento` ON (`alojamiento`.`tipo_alojamiento` = `tipo_alojamiento`.`id`)
  INNER JOIN `factura` ON (`reserva`.`id` = `factura`.`reserva`)
  INNER JOIN `detalle` ON (`factura`.`id` = `detalle`.`factura`)
  INNER JOIN `producto` ON (`detalle`.`producto` = `producto`.`id`)
  INNER JOIN `tipo_servicio` ON (`producto`.`tipo_servicio` = `tipo_servicio`.`id`)


';
        $dataProvider=new CSqlDataProvider($sql3, array(
            'keyField'=>'id',
            'totalItemCount'=>$count,
            'sort'=>array(
                'attributes'=>array(
                    'id',
                    'numero_alojamiento',
                    'nombres',
                    'numero_documento',
                    'apellidos',
                    'tipo_alojamiento',
                    'descripcion_tipo_alojamiento',
                    'fecha_entrada',
                    'fecha_salida',
                    'tarifa_alojamiento',
                    'fecha_factura',
                    'reserva',
                    'total_factura',
                    'cantidad',
                    'descripcion_producto',
                    'precio_producto',
                    'iva',
                    'descripcion_tipo_servicio'

                ),
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index3', array(
            'dataProvider'=>$dataProvider,
        ));

    }

    public function actiondetalle ()
    {
        $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM rol')->queryScalar();
        $sql4='SELECT
   `detalle`.`id`,
  `detalle`.`cantidad`,
  `producto`.`descripcion_producto`,
  `producto`.`precio_producto`,
  `producto`.`iva`,
  `tipo_servicio`.`descripcion_tipo_servicio`
FROM
  `detalle`
  INNER JOIN `producto` ON (`detalle`.`producto` = `producto`.`id`)
  INNER JOIN `tipo_servicio` ON (`producto`.`tipo_servicio` = `tipo_servicio`.`id`)



';
        $dataProvider=new CSqlDataProvider($sql4, array(
            'keyField'=>'id',
            'totalItemCount'=>$count,
            'sort'=>array(
                'attributes'=>array(
                    'cantidad',
                    'descripcion_producto',
                    'precio_producto',
                    'iva',
                    'descripcion_tipo_servicio'

                ),
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index4', array(
            'dataProvider'=>$dataProvider,
        ));

    }

    public function actionreserva ()
    {
        $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM rol')->queryScalar();
        $sql5='SELECT
   `persona`.`id`,
  `persona`.`nombres`,
  `persona`.`apellidos`,
  `huesped_reserva`.`reserva`
FROM
  `huesped_reserva`
  INNER JOIN `persona` ON (`huesped_reserva`.`huesped` = `persona`.`id`)
  INNER JOIN `reserva` ON (`huesped_reserva`.`reserva` = `reserva`.`id`)




';
        $dataProvider=new CSqlDataProvider($sql5, array(
            'keyField'=>'id',
            'totalItemCount'=>$count,
            'sort'=>array(
                'attributes'=>array(
                    'id',
                    'nombres',
                    'apellidos',
                    'reserva'

                ),
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index', array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actioncliente ()
    {
        $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM rol')->queryScalar();
        $sql6='SELECT
`tipo_persona`.`descripcion_tipo_persona`,
`persona`.`nombres`,
`persona`.`apellidos`,
`persona`.`numero_documento`,
`persona`.`id`,
`huesped_reserva`.`reserva`,
`huesped_reserva`.`id`,
`tipo_persona`.`id`
FROM
`persona`
INNER JOIN `tipo_persona` ON (`persona`.`tipo_persona` = `tipo_persona`.`id`)
INNER JOIN `huesped_reserva` ON (`persona`.`id` = `huesped_reserva`.`huesped`)




';
        $dataProvider=new CSqlDataProvider($sql6, array(
            'keyField'=>'id',
            'totalItemCount'=>$count,
            'sort'=>array(
                'attributes'=>array(
                    'descripcion_tipo_persona',
                    'nombres',
                    'apellidos',
                    'numero_documento',
                    'id',
                    'reserva',
                    'id',
                    `tipo_persona`.`id`
                ),
            ),
            'pagination'=>array(
                'pageSize'=>10,
            ),
        ));
        $this->render('index', array(
            'dataProvider'=>$dataProvider,
        ));
    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
}