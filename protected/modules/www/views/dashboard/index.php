



			<?php

			switch ($view) {
				case 'gender':
					$viewFile = '_dashboard_gender';
					$breacrumbTitle = 'Gender statistics';
					break;
				case 'age':
					$viewFile = '_dashboard_age';
					$breacrumbTitle = 'Age statistics';
					break;
				case 'device':
					$viewFile = '_dashboard_device';
					$breacrumbTitle = 'Device statistics';
					break;
				case 'geo':
					$viewFile = '_dashboard_geo';
					$breacrumbTitle = 'Geo statistics';
					break;
				case 'email':
					$viewFile = '_dashboard_email';
					$breacrumbTitle = 'Email statistics';
					break;
				default:
					$viewFile = '_dashboard_index';
					$breacrumbTitle = 'Overview';
			}
			?>
			

			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Dashboard <small>for publishers</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="/">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="/dashboard"><?php echo $breacrumbTitle; ?></a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="icon-calendar"></i>
								<span></span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->

			<script type="text/javascript">
			  !function(a,b){if(void 0===b[a]){b["_"+a]={},b[a]=function(c){b["_"+a].clients=b["_"+a].clients||{},b["_"+a].clients[c.projectId]=this,this._config=c},b[a].ready=function(c){b["_"+a].ready=b["_"+a].ready||[],b["_"+a].ready.push(c)};for(var c=["addEvent","setGlobalProperties","trackExternalLink","on"],d=0;d<c.length;d++){var e=c[d],f=function(a){return function(){return this["_"+a]=this["_"+a]||[],this["_"+a].push(arguments),this}};b[a].prototype[e]=f(e)}var g=document.createElement("script");g.type="text/javascript",g.async=!0,g.src="https://d26b395fwzu5fz.cloudfront.net/3.0.5/keen.min.js";var h=document.getElementsByTagName("script")[0];h.parentNode.insertBefore(g,h)}}("Keen",this);
			</script>


			<script type="text/javascript">

			  //Configure the client
			  var client = new Keen({
			      projectId: "<?php echo Yii::app()->user->keenProjectId ?>",
			      readKey: "<?php echo Yii::app()->user->keenReadKey ?>"
			  });


			  	var iso = "2015-02-18T06:00:00.000Z";


			  	
    			
			</script>
			
			<div id="dashboard-elements">
			<?php 
				date_default_timezone_set(Yii::app()->user->timezoneName);
				
				$this->localeToday = date('Y-m-j');

				$time = new DateTime('now', new DateTimeZone(Yii::app()->user->timezoneName));
				$timezoneOffset = $time->format('P');

				$this->renderPartial($viewFile, array(
					'startdate' => strtotime('-6 day' . $this->localeToday),
					'enddate' => strtotime('23 hours 59 minutes' . $this->localeToday),
					'timezoneOffset' => $timezoneOffset,
				));
				
			?>
			</div>



			<div class="clearfix">
			</div>