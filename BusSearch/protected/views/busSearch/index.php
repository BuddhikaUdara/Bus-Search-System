

<style>
  .grid-view .button-column {
  display:none;
  }

</style>




<?php
/* @var $this BusSearchController */

$this->breadcrumbs=array(
	'Bus Search',
);
?>


<p style = "font-size: 1.1em;">
	You can search your Bus and Route Information easily. Just type your bus route and hit "Enter" key.</br> 
	Please Refresh your web page before starting a new search.
	The System uses caching technologies and you need to send a new server request to re instantiate the search model.
</p>

<p style = "font-size: 1.1em;">
	Search by Area Name, Route Name, Route Code,Bus Name,Bus Stop Name, Arrival Time,Bus Registered Number Plate and Bus Owner.
</p>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bus-search-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns' => array(
    array(
        'header' => Yii::t('app', 'Row'),
        'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
    ),
	array(
        'name' => 'area_name',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'area_name',
			'sourceUrl'=>array('busSearch/aclist'),
			'name'=>'area_name',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>45,'maxlength'=>45,
			),),true),
			
		//'value' => $model->area_name,
		//'filter' => CHtml::listData(SmsOutbox::getStatusList(), 'id', 'title')
    ),
    array(
        'name' => 'routeName',
        //'value' => '$data->routeName',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'routeName',
			'sourceUrl'=>array('busSearch/aclist2'),
			'name'=>'routeName',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>35,'maxlength'=>35,
			),),true),
    ),
    array(
        'name' => 'routeCode',
       // 'value' => '$data->routeCode',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'routeCode',
			'sourceUrl'=>array('busSearch/aclist3'),
			'name'=>'routeCode',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>35,'maxlength'=>35,
			),),true),
    ),
    array(
        'name' => 'bus_name',
        //'value' => '$data->bus_name',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'bus_name',
			'sourceUrl'=>array('busSearch/aclist4'),
			'name'=>'bus_name',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>45,'maxlength'=>45,
			),),true),
    ),
	array(
        'name' => 'bus_stop_name',
        //'value' => '$data->bus_stop_name',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'bus_stop_name',
			'sourceUrl'=>array('busSearch/aclist5'),
			'name'=>'bus_stop_name',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>45,'maxlength'=>45,
			),),true),
    ),
	array(
        'name' => 'arrival_time',
        //'value' => '$data->arrival_time',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'arrival_time',
			'sourceUrl'=>array('busSearch/aclist6'),
			'name'=>'arrival_time',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>45,'maxlength'=>45,
			),),true),
    ),
	array(
        'name' => 'bus_registerd_id',
       // 'value' => '$data->bus_registerd_id',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'bus_registerd_id',
			'sourceUrl'=>array('busSearch/aclist7'),
			'name'=>'bus_registerd_id',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>45,'maxlength'=>45,
			),),true),
    ),
	array(
        'name' => 'bus_owner',
        //'value' => '$data->bus_owner',
		'filter' => $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model'=>$model,
			'attribute'=>'bus_owner',
			'sourceUrl'=>array('busSearch/aclist8'),
			'name'=>'bus_owner',
			'options'=>array( 'minLength'=>'1', 'showAnim'=>'fold',),
			'htmlOptions'=>array('size'=>45,'maxlength'=>45,
			),),true),
    ),
	array(
			'class'=>'CButtonColumn',
		),
),
)); 






?>