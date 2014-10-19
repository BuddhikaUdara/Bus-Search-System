<?php

/**
 * This is the model class for table "route_information_table".
 *
 * The followings are the available columns in table 'route_information_table':
 * @property string $route_id
 * @property string $area_id
 * @property string $route_name
 * @property string $route_code
 * @property string $bus_id
 * @property string $record_status
 * @property string $last_update
 */
class RouteInformationTable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'route_information_table';
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
			array('area_id', 'length', 'max'=>10),
			array('route_name, route_code, bus_id, record_status, last_update', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('route_id, area_id, route_name, route_code, bus_id, record_status, last_update', 'safe', 'on'=>'search'),
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
			'route_id' => 'Route',
			'area_id' => 'Area',
			'route_name' => 'Route Name',
			'route_code' => 'Route Code',
			'bus_id' => 'Bus',
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

		$criteria->compare('route_id',$this->route_id,true);
		$criteria->compare('area_id',$this->area_id,true);
		$criteria->compare('route_name',$this->route_name,true);
		$criteria->compare('route_code',$this->route_code,true);
		$criteria->compare('bus_id',$this->bus_id,true);
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
	 * @return RouteInformationTable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
