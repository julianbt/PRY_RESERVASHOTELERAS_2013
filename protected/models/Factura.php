<?php

/**
 * This is the model class for table "factura".
 *
 * The followings are the available columns in table 'factura':
 * @property string $id
 * @property string $reserva
 * @property string $fecha_factura
 * @property double $total_factura
 *
 * The followings are the available model relations:
 * @property Detalle[] $detalles
 * @property Reserva $reserva0
 */
class Factura extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reserva, fecha_factura, total_factura', 'required'),
			array('total_factura', 'numerical'),
			array('reserva', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, reserva, fecha_factura, total_factura', 'safe', 'on'=>'search'),
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
			'detalles' => array(self::HAS_MANY, 'Detalle', 'factura'),
			'reserva0' => array(self::BELONGS_TO, 'Reserva', 'reserva'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'reserva' => 'Reserva',
			'fecha_factura' => 'Fecha Factura',
			'total_factura' => 'Total Factura',
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
		$criteria->compare('reserva',$this->reserva,true);
		$criteria->compare('fecha_factura',$this->fecha_factura,true);
		$criteria->compare('total_factura',$this->total_factura);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Factura the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
