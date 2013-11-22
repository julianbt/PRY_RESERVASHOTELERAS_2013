<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $numero_documento
 * @property string $celular
 * @property string $email
 * @property string $lugar_procedencia
 * @property string $hoja_vida
 * @property string $tipo_persona
 *
 * The followings are the available model relations:
 * @property EmpleadoRol[] $empleadoRols
 * @property HuespedReserva[] $huespedReservas
 * @property TipoPersona $tipoPersona
 * @property Usuario[] $usuarios
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, numero_documento, celular, email, tipo_persona', 'required'),
			array('nombres, apellidos, email, lugar_procedencia', 'length', 'max'=>30),
			array('numero_documento, celular', 'length', 'max'=>15),
            array('numero_documento','numerical','integerOnly'=>true,'message'=>'El numero de documento no es valido ferifique que sean numeros'),
            array('celular','numerical','integerOnly'=>true,'message'=>'El numero de celular no es valido ferifique que sean numeros'),
            array('email','email','message'=>'El correo electronico no es valido por favor verifique su correo '),
			array('hoja_vida', 'length', 'max'=>60),
			array('tipo_persona', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombres, apellidos, numero_documento, celular, email, lugar_procedencia, hoja_vida, tipo_persona', 'safe', 'on'=>'search'),
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
			'empleadoRols' => array(self::HAS_MANY, 'EmpleadoRol', 'empleado'),
			'huespedReservas' => array(self::HAS_MANY, 'HuespedReserva', 'huesped'),
			'tipoPersona' => array(self::BELONGS_TO, 'TipoPersona', 'tipo_persona'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'persona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'numero_documento' => 'Numero Documento',
			'celular' => 'Celular',
			'email' => 'Email',
			'lugar_procedencia' => 'Lugar Procedencia',
			'hoja_vida' => 'Hoja Vida',
			'tipo_persona' => 'Tipo Persona',
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
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('numero_documento',$this->numero_documento,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lugar_procedencia',$this->lugar_procedencia,true);
		$criteria->compare('hoja_vida',$this->hoja_vida,true);
		$criteria->compare('tipo_persona',$this->tipo_persona,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
