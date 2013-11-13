<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property string $id
 * @property string $descripcion_producto
 * @property double $precio_producto
 * @property integer $stock
 * @property double $iva
 * @property string $tipo_servicio
 *
 * The followings are the available model relations:
 * @property Detalle[] $detalles
 * @property TipoServicio $tipoServicio
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion_producto, precio_producto, stock, iva, tipo_servicio', 'required'),
			array('stock', 'numerical', 'integerOnly'=>true),
			array('precio_producto, iva', 'numerical'),
			array('descripcion_producto', 'length', 'max'=>60),
			array('tipo_servicio', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, descripcion_producto, precio_producto, stock, iva, tipo_servicio', 'safe', 'on'=>'search'),
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
			'detalles' => array(self::HAS_MANY, 'Detalle', 'producto'),
			'tipoServicio' => array(self::BELONGS_TO, 'TipoServicio', 'tipo_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descripcion_producto' => 'Descripcion Producto',
			'precio_producto' => 'Precio Producto',
			'stock' => 'Stock',
			'iva' => 'Iva',
			'tipo_servicio' => 'Tipo Servicio',
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
		$criteria->compare('descripcion_producto',$this->descripcion_producto,true);
		$criteria->compare('precio_producto',$this->precio_producto);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('iva',$this->iva);
		$criteria->compare('tipo_servicio',$this->tipo_servicio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
