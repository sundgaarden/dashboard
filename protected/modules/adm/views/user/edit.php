
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

						<div class="form-group <?php echo array_key_exists('email', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Email</label>
							<div class="col-md-4">

								

								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
									</span>
									<?php echo $form -> textField($model, 'email', array(
									'class' => 'form-control',
									'placeholder' => "Enter an email address"
									));
									?>
								</div>
							</div>
						</div>


						<div class="form-group <?php echo array_key_exists('publisherid', $model->getErrors()) ? ' has-error' : '' ?>">
							<label class="col-md-3 control-label">Associated publisher</label>
							<div class="col-md-4">

	

								<?php echo $form->dropDownList($model, 'publisherid', CHtml::listData(Publisher::model()->findAll(), 'id', 'name'), array(
								'class' => 'form-control'
								)); ?>
							</div>
						</div>


						

						<div class="form-group">
							<label class="col-md-3 control-label">New password</label>
							<div class="col-md-4">
								<div class="input-group">
									<input type="password" name="newpassword1" class="form-control" placeholder="Password">
									<span class="input-group-addon">
									<i class="fa fa-user"></i>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Repeat new password</label>
							<div class="col-md-4">
								<div class="input-group">
									<input type="password" name="newpassword2" class="form-control" placeholder="Password">
									<span class="input-group-addon">
									<i class="fa fa-user"></i>
									</span>
								</div>
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


