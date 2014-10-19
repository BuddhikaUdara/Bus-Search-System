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
class BusSearch extends CActiveRecord
{
	
		public $routeName;
		public $routeCode;
		public $bus_name;
		public $bus_stop_name;
		public $arrival_time;
		public $bus_registerd_id;
		public $bus_owner;
	
	
	public function tableName()
	{
		return 'area_table';
	}

	
	public function rules()
	{
		
		return array(
			array('area_name, record_status, last_update', 'length', 'max'=>45),
			
			array('area_id, area_name, record_status, last_update,routeName,routeCode,bus_name,bus_stop_name,bus_stop_name,arrival_time,bus_registerd_id,bus_owner', 'safe', 'on'=>'search'),
			
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
					
		$crt = new CDbCriteria();
        $crt->alias = 'AreaTable';
		
        $crt->select = 'AreaTable.area_id as area_id,AreaTable.area_name,
		ri.route_name as routeName,
		ri.route_code as routeCode, bi.bus_name,
		bs.bus_stop_name,
		bs.arrival_time,
		bi.bus_registerd_id,
		bi.bus_owner';
		
        //$crt->from = AreaTable::model()->tableName();
		$crt->join = " inner join " . RouteInformationTable::model()->tableName() . " as ri on ri.area_id = AreaTable.area_id";
        $crt->join .= " inner join " . BusStopInformationTable::model()->tableName() . " as bs on bs.route_code = ri.route_id";
        $crt->join .= " inner join " . BusInformationTable::model()->tableName() . " as bi on bi.bus_id= bs.bus_id";
        
		$crt->compare('AreaTable.area_name', $this->area_name);
        $crt->compare('ri.route_name', $this->routeName);
        $crt->compare('ri.route_code', $this->routeCode);
        $crt->compare('bi.bus_name', $this->bus_name, true);
		$crt->compare('bs.bus_stop_name', $this->bus_stop_name, true);
		$crt->compare('bs.arrival_time', $this->arrival_time);
		$crt->compare('bi.bus_registerd_id', $this->bus_registerd_id);
		$crt->compare('bi.bus_owner', $this->bus_owner);
        //$crt->compare('fl.kind', Flow::KIND_SMS);
        		
		return new CActiveDataProvider($this, array(
			'criteria'=>$crt,
		));
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
