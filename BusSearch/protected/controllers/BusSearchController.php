<?php

class BusSearchController extends Controller
{
	public function actionIndex()
	{
		//$this->render('index');
		$dataProvider=new CActiveDataProvider('BusSearch');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
		
	}

	public function actionAdmin()
	{
		
		$model=new BusSearch('search');
		//$model->unsetAttributes();  
		if(isset($_GET['BusSearch']))
			$model->attributes=$_GET['BusSearch'];

			
		$this->render('index',array(
			'model'=>$model,
		));
	}
	
	public function actions()
  {
    return array(
      'aclist'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'BusSearch', 
        'attribute'=>'area_name', 
      ),
	  'aclist2'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'RouteInformationTable', 
        'attribute'=>'route_name', 
      ),
	  'aclist3'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'RouteInformationTable', 
        'attribute'=>'route_code', 
      ),
	  'aclist4'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'BusInformationTable', 
        'attribute'=>'bus_name', 
      ),
	  'aclist5'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'BusStopInformationTable', 
        'attribute'=>'bus_stop_name', 
      ),
	  'aclist6'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'BusStopInformationTable', 
        'attribute'=>'arrival_time', 
      ),
	  'aclist7'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'BusInformationTable', 
        'attribute'=>'bus_registerd_id', 
      ),
	  'aclist8'=>array(
        'class'=>'application.extensions.EAutoCompleteAction',
        'model'=>'BusInformationTable', 
        'attribute'=>'bus_owner', 
      ),
    );
  }
	
	public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view','aclist','aclist2','aclist3'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update','download'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
	
	
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}