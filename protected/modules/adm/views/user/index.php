
<!-- BEGIN PAGE HEADER-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
		Users
		<a href="/user/edit"><button type="button" class="btn btn-primary" style="float:right">Create user</button></a>
		</h3>

		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>

</div>
<!-- END PAGE HEADER-->

<div class="row">
	<div class="col-md-12">
<?php

	$this->widget('TbGridView', array(
		'type' => "striped bordered",
		'enableSorting' => TRUE,
		'enablePagination' => TRUE,
		'summaryText' => "",
		'dataProvider' => $model->search(),
		'filter' => $model,
		'columns' => array(
			array(
				'header' => "Name",
				'name' => "name",
			),
			array(
				'header' => "Email",
				'name' => "email",
			),
			array(
				'header' => "Publisher",
				'name' => "publisherid",
				'value' => '$data->publisher->name',
				'filter' => CHtml::listData(Publisher::model()->findAll(), 'id', 'name'),
			),
			array(
				'header' => "Created",
				'name' => "created"
			),
			array(
				'header' => "Edit",
				'htmlOptions' => array('style' => "text-align:center;"),
				'value' => 'CHtml::link("<i class=\"fa fa-edit\"></i>", Yii::app()->createUrl("user/edit", array("id" => $data->id)))',
				'type' => "raw",
			),
		)
	));
?>
	</div>
</div>



<div class="clearfix">
</div>