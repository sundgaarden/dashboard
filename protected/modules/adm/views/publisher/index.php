
<!-- BEGIN PAGE HEADER-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
		Publishers
		<a href="/publisher/edit"><button type="button" class="btn btn-primary" style="float:right">Create publisher</button></a>
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
				'header' => "Publisher name",
				'name' => "name",
			),
			array(
				'header' => "Created",
				'name' => "created"
			),
			array(
				'header' => "Edit",
				'htmlOptions' => array('style' => "text-align:center;"),
				'value' => 'CHtml::link("<i class=\"fa fa-edit\"></i>", Yii::app()->createUrl("publisher/edit", array("id" => $data->id)))',
				'type' => "raw",
			),
		)
	));
?>
	</div>
</div>



<div class="clearfix">
</div>