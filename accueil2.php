<!DOCTYPE html>



<html>

	<head>

		<title></title>
		<link rel="stylesheet" type="text/css" href="accueil2.css">
		<link rel="stylesheet" type="text/css" href="checkbox.css">
		<script type="text/javascript">
			$(function () {
				  $('[data-toggle="popover"]').popover()
			}
		</script>

		<style type="text/css">
			.row1 {
	      		width: 50%;
	      	}
		</style>

	</head>


	<body>
		<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="bootstrap.min.js"></script>
		<script src="jquery-1.11.1.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="jquery-1.11.1.min.js"></script>
		<script src="jquery.min.js"></script>

		<!------ Include the above in your HEAD tag ---------->

		<link rel="stylesheet" href="font-awesome.min.css">
		<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
		<div class="mainbody container-fluid">
			<div class="row">
				<div class="navbar-wrapper">
					<div class="container-fluid">
						<div class="navbar navbar-default navbar-static-top" role="navigation">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<spanclass="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="accueil2.php" style="margin-right:-8px; margin-top:-5px;"><img alt="Brand" src="oie_transparent3.png" width="50px" height="30px"></a>
									<a class="navbar-brand" href="#">Statistiques ANPEJ</a>
									<i class="brand_network">
										<small>
											<small>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plateforme de requêtage
											</small>
										</small>
									</i>
								</div>
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li class="dropdown">											
											<ul class="dropdown-menu dropdown-notification" role="menu">
												<div class="header">
													<div class="pull-right">
														<a href="#" id="mark-all-read-link" class="btn btn-default">Mark all as read</a>
													</div>
													<h3>Recent notifications</h3>
												</div>
												<div class="ajax-loader" style="display: none;">
													<div class="spinner" style="opacity: 1;"></div>
												</div>
												<div class="notifications ps-container ps-theme-default ps-active-y" data-ps-id="f8800f93-b9f9-fcc0-8ee2-7a1853baecc7">
													<div class="media read stream-element" data-guid="35489" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="Pa Plo" class="avatar img-responsive center-block" title="Pa Plo" data-person_id="793" src="https://lut.im/qw3MLhuFKd/giwr4PCYVzXKSFLa.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Pa Plo</a>
															also commented on Éric’s post 
															<a data-ref="621079" class="hard_object_link" href="#">Lorem ipsum dolor sit amet</a>
															.
															<div>
																<time datetime="2017-02-19T14:22:57Z" class="timeago" title="19/02/2017 à 15:22:57" data-time-ago="2017-02-19T14:22:57Z" data-original-title="19/02/2017 à 15:22:57">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media stream-element unread" data-guid="35487" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="Fla" class="avatar img-responsive center-block" title="Fla" data-person_id="52" src="https://lut.im/b4CSwyRBRD/HWJocHMD9vQxLHLK.jpg"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Marty</a>
															 also commented on Jean-Pierre MARTIN’s post 
															<a data-ref="608389" class="hard_object_link" href="#">My flower is beautiful !!!</a>
															.
															<div>
																<time datetime="2017-02-19T14:11:10Z" class="timeago" title="19/02/2017 à 15:11:10" data-time-ago="2017-02-19T14:11:10Z" data-original-title="19/02/2017 à 15:11:10">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35486" data-type="started_sharing">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="HNY 2017" class="avatar img-responsive center-block" title="HNY 2017" data-person_id="24071" src="https://lut.im/0hqJy8kij2/6jhAnegLpw7cXNEQ.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">HNY 2017</a>
															 started sharing with you.
															<div>
																<time datetime="2017-02-19T14:07:00Z" class="timeago" title="19/02/2017 à 15:07:00" data-time-ago="2017-02-19T14:07:00Z" data-original-title="19/02/2017 à 15:07:00">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35485" data-type="liked">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="HNY 2017" class="avatar img-responsive center-block" title="HNY 2017" data-person_id="24071" src="https://lut.im/0hqJy8kij2/6jhAnegLpw7cXNEQ.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">HNY 2017</a>
															 has liked your post 
															<a data-ref="624893" class="hard_object_link" href="#">My tailor is rich !</a>
															.
															<div>
																<time datetime="2017-02-19T14:06:52Z" class="timeago" title="19/02/2017 à 15:06:52" data-time-ago="2017-02-19T14:06:52Z" data-original-title="19/02/2017 à 15:06:52">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35484" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="HNY 2017" class="avatar img-responsive center-block" title="HNY 2017" data-person_id="24071" src="https://lut.im/0hqJy8kij2/6jhAnegLpw7cXNEQ.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">HNY 2017</a>
															 also commented on E M’s post 
															<a data-ref="621079" class="hard_object_link" href="#">Lorem ipsum dolor sit amet</a>
															.
															<div>
																<time datetime="2017-02-19T14:06:25Z" class="timeago" title="19/02/2017 à 15:06:25" data-time-ago="2017-02-19T14:06:25Z" data-original-title="19/02/2017 à 15:06:25">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35483" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="HNY 2017" class="avatar img-responsive center-block" title="HNY 2017" data-person_id="24071" src="https://lut.im/0hqJy8kij2/6jhAnegLpw7cXNEQ.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">HNY 2017</a>
															 also commented on E M’s post 
															<a data-ref="621079" class="hard_object_link" href="#">Lorem ipsum dolor sit amet</a>
															.
															<div>
																<time datetime="2017-02-19T13:58:00Z" class="timeago" title="19/02/2017 à 14:58:00" data-time-ago="2017-02-19T13:58:00Z" data-original-title="19/02/2017 à 14:58:00">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35482" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="Didier Rolland" class="avatar img-responsive center-block" title="Didier Rolland" data-person_id="20154" src="https://lut.im/UgCci9JrjU/1K5rb7JGbgnzMYwj.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Didier Rolland</a>
															 also commented on Jean-Pierre MARTIN’s post 
															<a data-ref="608389" class="hard_object_link" href="#">My flower is beautiful !!!</a>
															.
															<div>
																<time datetime="2017-02-19T13:53:12Z" class="timeago" title="19/02/2017 à 14:53:12" data-time-ago="2017-02-19T13:53:12Z" data-original-title="19/02/2017 à 14:53:12">
																	about an hour ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35474" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="Jean-Pierre MARTIN" class="avatar img-responsive center-block" title="Jean-Pierre MARTIN" data-person_id="8011" src="https://lut.im/9hfgD1rhaJ/yf2ePIqBqnMMbnM3.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Jean-Pierre MARTIN</a>
															 and 
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Didier Rolland</a>
															 also commented on Jean-Pierre MARTIN’s post 
															<a data-ref="608389" class="hard_object_link" href="#">My flower is beautiful !!!</a>
															.
															<div>
																<time datetime="2017-02-19T10:50:00Z" class="timeago" title="19/02/2017 à 11:50:00" data-time-ago="2017-02-19T10:50:00Z" data-original-title="19/02/2017 à 11:50:00">
																	about 5 hours ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35469" data-type="also_commented">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="damien" class="avatar img-responsive center-block" title="damien" data-person_id="448" src="https://lut.im/8jZcWUIJ5r/f4TY34ju1W2c5BDa.gif"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">damien</a>
															 and 
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Alain</a>
															 also commented on E M’s post 
															<a data-ref="621079" class="hard_object_link" href="#">Lorem ipsum dolor sit amet</a>
															.
															<div>
																<time datetime="2017-02-19T09:43:21Z" class="timeago" title="19/02/2017 à 10:43:21" data-time-ago="2017-02-19T09:43:21Z" data-original-title="19/02/2017 à 10:43:21">
																	about 6 hours ago
																</time>
															</div>
														</div>
													</div>
													<div class="media read stream-element" data-guid="35467" data-type="liked">
														<div class="unread-toggle pull-right">
															<i class="fa fa-eye" title="" data-original-title="Mark unread" aria-hidden="true"></i>
														</div>
														<div class="media-object pull-left">
															<a href="#" class="hovercardable hovercardable"><img alt="Homer S." class="avatar img-responsive center-block" title="Homer S." data-person_id="13636" src="https://lut.im/Y6YYQghq0s/sXnqU5X41BbN6Vx8.png"></a>
														</div>
														<div class="media-body">
															<a data-hovercard="#" href="#" class="hovercardable hovercardable">Homer S.</a>
															 has liked your post 
															<a data-ref="501541" class="hard_object_link" href="#">#diaspora is cool.</a>
															.
															<div>
																<time datetime="2017-02-19T08:16:55Z" class="timeago" title="19/02/2017 à 09:16:55" data-time-ago="2017-02-19T08:16:55Z" data-original-title="19/02/2017 à 09:16:55">
																	about 7 hours ago
																</time>
															</div>
														</div>
													</div>
												</div>
												<div class="view_all">
													<a href="#" id="view_all_notifications">View all</a>
												</div>
											</ul>
										</li>
										<li>
											<a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a>
										</li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;"><img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px"></span>
												<span class="user-name">John Doe</span>
												<b class="caret"></b>
											</a>
											<ul class="dropdown-menu">
												<li>
													<div class="navbar-content">
														<div class="row">
															<div class="col-md-5">
																<img src="me-flat.png" class="img-responsive" width="120px" height="120px" />
																<p class="text-center small">
																	<a href="./3X6zm">Change Photo</a>
																</p>
															</div>
															<div class="col-md-7">
																<span>John Doe</span>
																<p class="text-muted small">
																	example@pods.tld
																</p>
																<div class="divider"></div>
																<a href="./56ExR" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
																
															</div>
														</div>
													</div>
													<div class="navbar-footer">
														<div class="navbar-footer-content">
															<div class="row">
																<div class="col-md-6">
																	<a href="#" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Passowrd</a>
																</div>
																<div class="col-md-6">
																	<a href="index.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="padding-top:50px;"></div>

				<div class="panel panel-default">
						
				</div>

				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="list-group">
						<a class="list-group-item active" href="#">
							<i class="fa fa-rss fa-fw" aria-hidden="true"></i>
							  Demandes par bureau 
							<span class="pull-right"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
						</a>
						<a class="list-group-item" href="#"><i class="fa fa-newspaper-o fa-fw" aria-hidden="true"></i>Demandes par âge</a>
						<a class="list-group-item" href="#"><i class="fa fa-at fa-fw" aria-hidden="true"></i>  Demandes selon le genre</a>
						<a class="list-group-item" href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> Demandes selon le niveau d'étude</a>
						<a class="list-group-item" href="#"><i class="fa fa-hashtag fa-fw" aria-hidden="true"></i> Demandes selon le type de contrat</a>
						<a class="list-group-item" href="#"><i class="fa fa-globe fa-fw" aria-hidden="true"></i> Carte interactive</a>
					</div>

					
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
                    <div class="col-lg-12">
                      <div class="container">
                      	<div>Choisir une période</div>
                        <div class="row1">
                          <div class='col-sm-2'>
                            <label>Début</label>
                          </div>
                          <div class='col-sm-4'>
                            <div class="form-group">
                              <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="debut" value="<?php if (isset($_POST['debut'])) echo($_POST['debut'] ) ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class='col-sm-2'>
                            <label>Fin</label>
                          </div>
                          <div class='col-sm-4'>
                            <div class="form-group">
                              <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" name="fin" value="<?php if (isset($_POST['fin'])) echo($_POST['fin'] ) ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>

                        <script >
                          $(function () {
                            $('#datetimepicker1').datepicker({
                              format: "yyyy/mm/dd",
                              language: "fr",
                              autoclose: true,
                              todayHighlight: true
                            });
                          });
                        </script>

                        <script >
                          $(function () {
                            $('#datetimepicker2').datepicker({
                              format: "yyyy/mm/dd",
                              language: "fr",
                              autoclose: true,
                              todayHighlight: true
                            });
                          });
                        </script>
                      </div>
                    </div>
                  </div>
						</div>
						
					</div>
					<hr>

					
				</div>

				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
                    <div class="col-lg-12">
                      <div class="container">
                        <div class="row2">
                          <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <div class="form-check-inline" id="inlinebox">
                              <div id="radio1">
                                <label class="customradio">
                                  <span class="radiotextsty">Diagramme en bâtons</span>
                                  <input type="radio" name="radio" value="diagbat"checked="checked" <?php if ((isset($_REQUEST['radio'])) && ($_REQUEST['radio'] == 'diagbat')) {echo 'checked="checked"';}?> >
                                  <span class="checkmark"></span>
                                </label>    
                              </div>     
                              <div id="radio2"> 
                                <label class="customradio">
                                  <span class="radiotextsty">Diagramme circulaire</span>
                                  <input type="radio" name="radio" value="diagcirc"  <?php if ((isset($_REQUEST['radio'])) && ($_REQUEST['radio'] == 'diagcirc')) {echo 'checked="checked"';}?> >
                                  <span class="checkmark"></span>
                                </label>
                              </div>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
						</div>
						<div class="media">
								
						</div>
					</div>
					<hr>
					
				</div>

				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">

						</div>
						<div class="media">
								
						</div>
					</div>
					<hr>
					
				</div>



					<!-- Reshare Example -->
					

					
				</div>
			</div>
		</div>
	</body>
</html>
