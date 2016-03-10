<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $UserName
 * @property string $PassWord
 * @property string $CreationDate
 * @property string $LastUpdate
 * @property string $FirstName
 * @property string $LastName
 * @property integer $id_role
 *
 * The followings are the available model relations:
 * @property Role $idRole
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_role', 'required'),
			array('id_role', 'numerical', 'integerOnly'=>true),
			array('UserName, PassWord, FirstName, LastName', 'length', 'max'=>45),
			array('CreationDate, LastUpdate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, UserName, PassWord, CreationDate, LastUpdate, FirstName, LastName, id_role', 'safe', 'on'=>'search'),
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
			'idRole' => array(self::BELONGS_TO, 'Role', 'id_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'UserName' => 'User Name',
			'PassWord' => 'Pass Word',
			'CreationDate' => 'Creation Date',
			'LastUpdate' => 'Last Update',
			'FirstName' => 'First Name',
			'LastName' => 'Last Name',
			'id_role' => 'Id Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('UserName',$this->UserName,true);
		$criteria->compare('PassWord',$this->PassWord,true);
		$criteria->compare('CreationDate',$this->CreationDate,true);
		$criteria->compare('LastUpdate',$this->LastUpdate,true);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('id_role',$this->id_role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}