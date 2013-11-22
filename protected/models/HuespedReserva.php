<?php

/**
 * This is the model class for table "huesped_reserva".
 *
 * The followings are the available columns in table 'huesped_reserva':
 * @property string $id
 * @property string $reserva
 * @property string $huesped
 *
 * The followings are the available model relations:
 * @property Persona $huesped0
 * @property Reserva $reserva0
 */
class HuespedReserva extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'huesped_reserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reserva, huesped', 'required'),
			array('reserva, huesped', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, reserva, huesped', 'safe', 'on'=>'search'),
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
			'huesped0' => array(self::BELONGS_TO, 'Persona', 'huesped'),
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
			'huesped' => 'Huesped',
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
		$criteria->compare('huesped',$this->huesped,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HuespedReserva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
