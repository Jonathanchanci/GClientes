<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $cedula
 * @property string $nombre
 * @property string $email
 * @property string $fecha
 * @property string $foto
 */
class MClientes extends CActiveRecord
{
	public $foto;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			#validar nombre
			array('nombre','required','message'=>'El nombre es requerido'),
			array('nombre','length','max'=>50,'tooLong'=>'Maximo 50 Carecteres'),
			#validar cedula
			array('cedula','required','message'=>'La cedula es requerida'),
			array('cedula','match','pattern'=>'/^[0-9]+$/','message'=>'Se requieren solo numeros'),
			#validar email
			array('email','required','message'=>'El correo es requerido'),
			array('email','email','message'=>'Correo incorrecto'),
			#validar fecha
			array('fecha','required','message'=>'Su fecha de cumpleaños es requerida'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula, nombre, email, fecha, foto', 'safe', 'on'=>'search'),
			
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula' => 'Cedula',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'fecha' => 'Fecha',
			'foto' => 'Nombre de la Foto',
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

		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MClientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
