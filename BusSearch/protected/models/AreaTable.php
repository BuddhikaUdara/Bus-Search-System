<?php

/**
 * This is the model class for table "area_table".
 *
 * The followings are the available columns in table 'area_table':
 * @property string $area_id
 * @property string $area_name
 * @property string $record_status
 * @property string $last_update
 */
class AreaTable extends CActiveRecord
{
	
	public function tableName()
	{
		return 'area_table';
	}

	public function rules()
	{
		
		return array(
			array('area_name, record_status, last_update', 'length', 'max'=>45),
			
			array('area_id, area_name, record_status, last_update', 'safe', 'on'=>'search'),
		);
	}

	
	public function relations()
	{
		
		return array(
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'area_id' => 'Area',
			'area_name' => 'Area Name',
			'record_status' => 'Record Status',
			'last_update' => 'Last Update',
		);
	}

	
	public function search()
	{
		
		$criteria=new CDbCriteria;

		$criteria->compare('area_id',$this->area_id,true);
		$criteria->compare('area_name',$this->area_name,true);
		$criteria->compare('record_status',$this->record_status,true);
		$criteria->compare('last_update',$this->last_update,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
