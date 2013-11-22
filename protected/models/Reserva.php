<?php

/**
 * This is the model class for table "reserva".
 *
 * The followings are the available columns in table 'reserva':
 * @property string $id
 * @property string $fecha_entrada
 * @property string $fecha_salida
 * @property string $empleado_rol
 * @property string $alojamiento
 *
 * The followings are the available model relations:
 * @property Factura[] $facturas
 * @property HuespedReserva[] $huespedReservas
 * @property Alojamiento $alojamiento0
 * @property EmpleadoRol $empleadoRol
 */
class Reserva extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_entrada, fecha_salida, empleado_rol, alojamiento', 'required'),
			array('empleado_rol, alojamiento', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_entrada, fecha_salida, empleado_rol, alojamiento', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'facturas' => array(self::HAS_MANY, 'Factura', 'reserva'),
			'huespedReservas' => array(self::HAS_MANY, 'HuespedReserva', 'reserva'),
			'alojamiento0' => array(self::BELONGS_TO, 'Alojamiento', 'alojamiento'),
			'empleadoRol' => array(self::BELONGS_TO, 'EmpleadoRol', 'empleado_rol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha_entrada' => 'Fecha Entrada',
			'fecha_salida' => 'Fecha Salida',
			'empleado_rol' => 'Empleado Rol',
			'alojamiento' => 'Alojamiento',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('fecha_entrada',$this->fecha_entrada,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('empleado_rol',$this->empleado_rol,true);
		$criteria->compare('alojamiento',$this->alojamiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reserva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
