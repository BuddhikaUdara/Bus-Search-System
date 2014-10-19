<?php

/**
 * This is the model class for table "bus_stop_information_table".
 *
 * The followings are the available columns in table 'bus_stop_information_table':
 * @property string $bus_stop_id
 * @property string $route_code
 * @property string $bus_id
 * @property string $bus_stop_name
 * @property string $arrival_time
 * @property string $record_status
 * @property string $last_update
 */
class BusStopInformationTable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bus_stop_information_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('route_code', 'required'),
			array('route_code, bus_stop_name, arrival_time, record_status, last_update', 'length', 'max'=>45),
			array('bus_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bus_stop_id, route_code, bus_id, bus_stop_name, arrival_time, record_status, last_update', 'safe', 'on'=>'search'),
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
			'bus_stop_id' => 'Bus Stop',
			'route_code' => 'Route Code',
			'bus_id' => 'Bus',
			'bus_stop_name' => 'Bus Stop Name',
			'arrival_time' => 'Arrival Time',
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

		$criteria->compare('bus_stop_id',$this->bus_stop_id,true);
		$criteria->compare('route_code',$this->route_code,true);
		$criteria->compare('bus_id',$this->bus_id,true);
		$criteria->compare('bus_stop_name',$this->bus_stop_name,true);
		$criteria->compare('arrival_time',$this->arrival_time,true);
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
	 * @return BusStopInformationTable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
