<?php

/**
 * This is the model class for table "alojamiento".
 *
 * The followings are the available columns in table 'alojamiento':
 * @property string $id
 * @property string $numero_alojamiento
 * @property string $tipo_alojamiento
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property TipoAlojamiento $tipoAlojamiento
 * @property Estado $estado0
 * @property Reserva[] $reservas
 */
class Alojamiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alojamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_alojamiento, tipo_alojamiento, estado', 'required'),
			array('numero_alojamiento', 'length', 'max'=>15),
			array('tipo_alojamiento, estado', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, numero_alojamiento, tipo_alojamiento, estado', 'safe', 'on'=>'search'),
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
			'tipoAlojamiento' => array(self::BELONGS_TO, 'TipoAlojamiento', 'tipo_alojamiento'),
			'estado0' => array(self::BELONGS_TO, 'Estado', 'estado'),
			'reservas' => array(self::HAS_MANY, 'Reserva', 'alojamiento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numero_alojamiento' => 'Numero Alojamiento',
			'tipo_alojamiento' => 'Tipo Alojamiento',
			'estado' => 'Estado',
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
		$criteria->compare('numero_alojamiento',$this->numero_alojamiento,true);
		$criteria->compare('tipo_alojamiento',$this->tipo_alojamiento,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alojamiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
