<?php

/**
 * This is the model class for table "bus_information_table".
 *
 * The followings are the available columns in table 'bus_information_table':
 * @property integer $bus_id
 * @property string $bus_registerd_id
 * @property string $bus_name
 * @property string $bus_owner
 * @property string $record_status
 * @property string $last_update
 */
class BusInformationTable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bus_information_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bus_registerd_id, bus_name, bus_owner, record_status, last_update', 'required'),
			array('bus_registerd_id, record_status, last_update', 'length', 'max'=>45),
			array('bus_name, bus_owner', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bus_id, bus_registerd_id, bus_name, bus_owner, record_status, last_update', 'safe', 'on'=>'search'),
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
			'bus_id' => 'Bus',
			'bus_registerd_id' => 'Bus Registerd',
			'bus_name' => 'Bus Name',
			'bus_owner' => 'Bus Owner',
			'record_status' => 'Record Status',
			'last_update' => 'Last Update',
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

		$criteria->compare('bus_id',$this->bus_id);
		$criteria->compare('bus_registerd_id',$this->bus_registerd_id,true);
		$criteria->compare('bus_name',$this->bus_name,true);
		$criteria->compare('bus_owner',$this->bus_owner,true);
		$criteria->compare('record_status',$this->record_status,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BusInformationTable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
