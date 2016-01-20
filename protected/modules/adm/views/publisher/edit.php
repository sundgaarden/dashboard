
<!-- BEGIN PAGE HEADER-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
		Edit user
		</h3>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<div class="row">
	<div class="col-md-12">

		

		<div class="portlet box grey">
			<div class="portlet-body form">
				<!-- BEGIN FORM-->


				<?php

				if(Yii::app()->user->hasFlash('successmsg'))
					echo "<div class='alert alert-success'>" . Yii::app()->user->getFlash('successmsg') . "</div>";
				if(Yii::app()->user->hasFlash('errormsg'))
					echo "<div class='alert alert-danger'>". Yii::app()->user->getFlash('errormsg') . "</div>";
		
				$form = $this->beginWidget('TbActiveForm', array(
					'id' => "user-form", 
					'enableAjaxValidation' => FALSE,
					'enableClientValidation' => FALSE,
					'inlineErrors' => TRUE,
					'type' => 'horizontal',
					'htmlOptions' => array()));
			

				?>
				
					<div class="form-body">
						

						<div class="form-group">
							
							<label class="col-md-3 control-label"></label>
							<div class="col-md-4">
								<?php echo $form -> errorSummary(array($model), "<b>Please correct the following errors:</b>");?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('name', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Name</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'name', array(
								'class' => 'form-control',
								'placeholder' => "Enter a name"
								));
								?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('timezoneid', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Time zone</label>
							<div class="col-md-4">

	

								<?php echo $form->dropDownList($model, 'timezoneid', CHtml::listData(Timezone::model()->findAll(), 'id', 'name'), array(
								'class' => 'form-control',
								'empty' => 13
								)); ?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('subscriberapiurl', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Subscriber API Url</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'subscriberapiurl', array(
								'class' => 'form-control',
								'placeholder' => "Enter a subscriber api url"
								));
								?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('name', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">SendGrid user name</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'sendgridusername', array(
								'class' => 'form-control',
								'placeholder' => "Enter a SendGrid user name"
								));
								?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('sendgridpassword', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">SendGrid password</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'sendgridpassword', array(
								'class' => 'form-control',
								'placeholder' => "Enter a SendGrid password"
								));
								?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('keenprojectid', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Keen project id</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'keenprojectid', array(
								'class' => 'form-control',
								'placeholder' => "Enter a Keen project id"
								));
								?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('keenreadkey', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Keen read key</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'keenreadkey', array(
								'class' => 'form-control',
								'placeholder' => "Enter a Keen read key"
								));
								?>
							</div>
						</div>

						<div class="form-group <?php echo array_key_exists('scriptversion', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Script version</label>
							<div class="col-md-4">

								<?php echo $form -> textField($model, 'scriptversion', array(
								'class' => 'form-control',
								'placeholder' => "Enter a Script version"
								));
								?>
							</div>
						</div>



					</div>
					<div class="form-actions fluid">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn blue">Save</button>
							<button type="button" class="btn default" onclick="javascript:history.back()">Cancel</button>
						</div>
					</div>
				<!-- END FORM-->

				<?php $this->endWidget(); ?>
			</div>
		</div>
		
	</div>
</div>


