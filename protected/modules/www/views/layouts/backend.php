<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Sharewall</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php //Yii::app()->clientScript->registerCoreScript('bootstrap'); 

//Yii::app()->bootstrap->register();
?>

<?php //Yii::app()->bootstrap->register(); ?>


<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="/assets/admin/layout/css/themes/light2.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="/dashboard">
			<img src="/assets/admin/layout/img/sharewall-logo.png" alt="logo" class="logo-default" style="height:32px; margin-top:8px"/>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="classic-menu-dropdown<?php echo (Yii::app()->request->getQuery('view') == 'index' || Yii::app()->request->getQuery('view') == '')?' active':'';?>">
					<a href="/dashboard/index">
					Overview <span<?php echo (Yii::app()->request->getQuery('view') == 'gender' || Yii::app()->request->getQuery('view') == '')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li class="classic-menu-dropdown<?php echo (Yii::app()->request->getQuery('view') == 'gender')?' active':'';?>">
					<a href="/dashboard/index/view/gender">
					Gender statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'gender')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li class="classic-menu-dropdown<?php echo (Yii::app()->request->getQuery('view') == 'age')?' active':'';?>">
					<a href="/dashboard/index/view/age">
					Age statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'age')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li class="classic-menu-dropdown<?php echo (Yii::app()->request->getQuery('view') == 'device')?' active':'';?>">
					<a href="/dashboard/index/view/device">
					Device statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'device')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li class="classic-menu-dropdown<?php echo (Yii::app()->request->getQuery('view') == 'geo')?' active':'';?>">
					<a href="/dashboard/index/view/geo">
					Geo statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'geo')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li class="classic-menu-dropdown<?php echo (Yii::app()->request->getQuery('view') == 'email')?' active':'';?>">
					<a href="/dashboard/index/view/email">
					Email statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'email')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->

		
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
				
				<?php if (!Yii::app()->user->isGuest) { ?>


				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" />
					<span class="username">
					<?php echo Yii::app()->user->name ?> (<?php echo Yii::app()->user->publisherName ?>) </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<?php

						if (Yii::app()->user->isAdmin) {

							$publishers = Publisher::model()->findAllByAttributes(array('dashboardactive' => 1));
							$domainCount = count($publishers);
							$view = Yii::app()->request->getQuery('view');
							if ($view == '')
								$view = 'index';

							foreach($publishers as $publisher) {
								$domain = $publisher -> name;
								if ($publisher -> id != Yii::app()->user->publisherId)
									echo '<li> <a href="/dashboard/index/view/'.$view.'/id/'.$publisher -> id.'"><i class="fa fa-newspaper-o"></i> '.$publisher -> name.'&nbsp;&nbsp;&nbsp;&nbsp;</a></li>';
							}


							if ($domainCount > 1)
								echo '<li class="divider"></li>';
						}

						
						?>
						<li>
							<a href="/login/logout">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<?php } ?>
				
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">

	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- BEGIN HORIZONTAL RESPONSIVE MENU -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->


				<li<?php echo (Yii::app()->request->getQuery('view') == 'index' || Yii::app()->request->getQuery('view') == '')?' class="active"':'';?>>
					<a href="/dashboard/index">
					Overview <span<?php echo (Yii::app()->request->getQuery('view') == 'gender' || Yii::app()->request->getQuery('view') == '')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li<?php echo (Yii::app()->request->getQuery('view') == 'gender')?' class="active"':'';?>>
					<a href="/dashboard/index/view/gender">
					Gender statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'gender')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li<?php echo (Yii::app()->request->getQuery('view') == 'age')?' class="active"':'';?>>
					<a href="/dashboard/index/view/age">
					Age statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'age')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li<?php echo (Yii::app()->request->getQuery('view') == 'device')?' class="active"':'';?>>
					<a href="/dashboard/index/view/device">
					Device statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'device')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
				<li<?php echo (Yii::app()->request->getQuery('view') == 'geo')?' class="active"':'';?>>
					<a href="/dashboard/index/view/geo">
					Geo statistics<span<?php echo (Yii::app()->request->getQuery('view') == 'geo')?' class="selected"':'';?>>
					</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- END HORIZONTAL RESPONSIVE MENU -->
	</div>
	<!-- END SIDEBAR -->
	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">


			<?php echo $content ?>
			
			
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Sharewall
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>


<script>
var localeToday = "<?php echo $this->localeToday; ?>";

</script>


<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="/assets/global/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->


<!-- BEGIN PAGE LEVEL SCRIPTS -->


<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   Index.init();
   Index.initMiniCharts();
   Index.initDashboardDaterange();


   Charts.init();
   //Charts.initCharts();
   //Charts.initPieCharts();

   
});



</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>