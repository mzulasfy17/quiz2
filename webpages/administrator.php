<!doctype html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Propeller_Admin_Dashboard">
	<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

	<title>Propeller Admin Dashboard</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $app->config["site"]; ?>/public/images/favicon.png">

	<!-- Google icon -->
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo $app->config["site"]; ?>/public/fonts/material-icons/material-icons.css">

	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/bootstrap.min.css">

	<!-- Propeller css -->
	<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller.min.css">

	<!-- Propeller date time picker css-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/css/bootstrap-datetimepicker.css" />
	<link rel="stylesheet" type="text/css"
		href="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/css/pmd-datetimepicker.css" />

	<!-- Propeller dataTables css-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo $app->config["site"]; ?>/public/components/data-table/media/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo $app->config["site"]; ?>/public/components/data-table/extensions/Responsive/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo $app->config["site"]; ?>/public/components/data-table/extensions/Select/css/select.dataTables.min.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo $app->config["site"]; ?>/public/components/data-table/css/pmd-datatable.css">

	<!-- Propeller theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller-theme.css" />

	<!-- Propeller admin theme css-->
	<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller-admin.css">
</head>

<body>
	<!-- Header Starts -->
	<!--Start Nav bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

		<div class="container-fluid">
			<div class="pmd-navbar-right-icon pull-right navigation">
				<!-- Notifications -->
				<div class="dropdown notification icons pmd-dropdown">
					<a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect"
						data-toggle="dropdown" role="button" aria-expanded="true">
						<div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">
							notifications_none</div>
					</a>
					<div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
						<!-- Card header -->
						<div class="pmd-card-title">
							<div class="media-body media-middle">
								<a href="notifications.html" class="pull-right">3 new notifications</a>
								<h3 class="pmd-card-title-text">Notifications</h3>
							</div>
						</div>
						<!-- Notifications list -->
						<ul class="list-group pmd-list-avatar pmd-card-list">
							<li class="list-group-item" style="display:none">
								<p class="notification-blank">
									<span class="dic dic-notifications-none"></span>
									<span>You don´t have any notifications</span>
								</p>
							</li>
							<li class="list-group-item unread">
								<a href="javascript:void(0)">
									<div class="media-left">
										<span class="avatar-list-img40x40">
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive"
												src="<?php echo $app->config["site"]; ?>/public/images/profile-1.png"
												data-holder-rendered="true">
										</span>
									</div>
									<div class="media-body">
										<span class="list-group-item-heading"><span>Prathit</span> posted a new
											challanegs</span>
										<span class="list-group-item-text">5 Minutes ago</span>
									</div>
								</a>
							</li>
							<li class="list-group-item">
								<a href="javascript:void(0)">
									<div class="media-left">
										<span class="avatar-list-img40x40">
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive"
												src="<?php echo $app->config["site"]; ?>/public/images/profile-2.png"
												data-holder-rendered="true">
										</span>
									</div>
									<div class="media-body">
										<span class="list-group-item-heading"><span>Keel</span> Cloned 2
											challenges.</span>
										<span class="list-group-item-text">15 Minutes ago</span>
									</div>
								</a>
							</li>
							<li class="list-group-item unread">
								<a href="javascript:void(0)">
									<div class="media-left">
										<span class="avatar-list-img40x40">
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive"
												src="<?php echo $app->config["site"]; ?>/public/images/profile-3.png"
												data-holder-rendered="true">
										</span>
									</div>

									<div class="media-body">
										<span class="list-group-item-heading"><span>John</span> posted new
											collection.</span>
										<span class="list-group-item-text">25 Minutes ago</span>
									</div>
								</a>
							</li>
							<li class="list-group-item unread">
								<a href="javascript:void(0)">
									<div class="media-left">
										<span class="avatar-list-img40x40">
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive"
												src="<?php echo $app->config["site"]; ?>/public/images/profile-4.png"
												data-holder-rendered="true">
										</span>
									</div>
									<div class="media-body">
										<span class="list-group-item-heading"><span>Valerii</span> Shared 5
											collection.</span>
										<span class="list-group-item-text">30 Minutes ago</span>
									</div>
								</a>
							</li>
						</ul>
						<!-- End notifications list -->
					</div>
				</div>
				<!-- End notifications -->
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a href="javascript:void(0);"
					class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i
						class="material-icons">menu</i></a>
				<a href="<?php echo $app->config["site"]; ?>/admin" class="navbar-brand">
					<svg version="1.1" x="0px" y="0px" width="174.16px" height="48px" viewBox="0 0 174.16 48"
						enable-background="new 0 0 174.16 48" xml:space="preserve">
						<g>
							<g>
								<path fill="#FFFFFF" d="M8.658,17.795c5.339,0,8.403,2.64,8.403,7.251c0,4.792-3.064,7.585-8.403,7.585H3.773v6.4h-3.58V17.795
									H8.658z M3.773,29.415h4.733c3.276,0,5.127-1.395,5.127-4.278c0-2.792-1.851-4.125-5.127-4.125H3.773V29.415z" />
								<path fill="#FFFFFF" d="M29.167,32.601c-0.304,0.031-0.637,0.031-0.971,0.031H23.16v6.4h-3.58V17.795h8.616
									c5.431,0,8.556,2.64,8.556,7.251c0,3.398-1.578,5.794-4.399,6.886l4.763,7.1H33.05L29.167,32.601z M28.196,29.415
									c3.276,0,5.158-1.395,5.158-4.278c0-2.792-1.881-4.125-5.158-4.125H23.16v8.403H28.196z" />
								<path fill="#FFFFFF"
									d="M77.622,17.795c5.339,0,8.403,2.64,8.403,7.251c0,4.792-3.064,7.585-8.403,7.585h-4.884v6.4h-3.58V17.795
									H77.622z M72.738,29.415h4.732c3.277,0,5.127-1.395,5.127-4.278c0-2.792-1.85-4.125-5.127-4.125h-4.732V29.415z" />
								<path fill="#FFFFFF"
									d="M92.124,21.012v5.733h10.375v3.217H92.124v5.854h11.953v3.217H88.544V17.795h15.169v3.216H92.124z" />
								<path fill="#FFFFFF" d="M120.188,35.786v3.246h-12.772V17.795h3.58v17.991H120.188z" />
								<path fill="#FFFFFF" d="M135.356,35.786v3.246h-12.771V17.795h3.579v17.991H135.356z" />
								<path fill="#FFFFFF"
									d="M141.333,21.012v5.733h10.376v3.217h-10.376v5.854h11.953v3.217h-15.533V17.795h15.17v3.216H141.333z" />
								<path fill="#FFFFFF" d="M166.212,32.601c-0.304,0.031-0.638,0.031-0.971,0.031h-5.037v6.4h-3.578V17.795h8.615
									c5.43,0,8.555,2.64,8.555,7.251c0,3.398-1.577,5.794-4.399,6.886l4.764,7.1h-4.065L166.212,32.601z M165.241,29.415
									c3.275,0,5.156-1.395,5.156-4.278c0-2.792-1.881-4.125-5.156-4.125h-5.037v8.403H165.241z" />
							</g>
							<path opacity="0.2" fill="#000001" d="M62.295,26.706c-0.529,4.162-1.91,7.709-3.951,10.195c-2.008,2.443-4.649,3.869-7.749,3.867
								c-3.078,0-5.549-1.311-7.413-3.635c-1.923-2.4-3.186-5.887-3.784-10.129l0.16-0.766l-0.035-0.928l5.57-1.038l5.709-0.359
								l4.412,0.115l6.468,1.056l0.701-0.109L62.295,26.706z" />
							<path fill="#FDC672" d="M63.149,25.023c-0.557,4.405-2.009,8.157-4.156,10.788c-2.112,2.586-4.891,4.094-8.152,4.094
								c-3.237,0-5.836-1.387-7.797-3.846c-2.103-2.641-4.178-8.793-3.799-12.148c2.721-1.023,7.072-1.686,11.976-1.686
								c4.909,0,9.264,0.665,11.985,1.689L63.149,25.023z" />
							<path opacity="0.2" fill="#2A100A" d="M61.876,31.167c-0.708,1.84-1.62,3.455-2.708,4.789c-1.093,1.338-2.363,2.391-3.785,3.105
								c-1.374,0.689-2.889,1.063-4.523,1.061c-1.624,0-3.09-0.342-4.401-0.99c-1.354-0.666-2.539-1.658-3.554-2.932
								c-1.026-1.287-1.84-2.873-2.476-4.703c-0.701-2.018-1.61-5.393-1.372-7.515v0.042c0.073-0.029,0.147-0.058,0.224-0.086
								c-0.377,3.349,1.694,9.493,3.794,12.127c1.941,2.436,4.511,3.816,7.706,3.84h0.078h0.08c3.221-0.023,5.968-1.525,8.06-4.086
								l0.048-0.061l0.015-0.018c0.065-0.08,0.129-0.162,0.192-0.246c2.455-3.191,3.748-7.563,3.951-11.554l-0.01-0.003
								c0.076,0.028,0.15,0.057,0.223,0.086C63.294,26.486,62.767,28.854,61.876,31.167L61.876,31.167z M62.993,23.863L62.993,23.863
								l0.069,0.024L62.993,23.863z" />
							<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" fill="#000001" d="M62.383,23.631l0.001,1.388
								c-2.568-1.019-5.091-2.174-9.881-2.174c-4.79,0-10.729,1.473-13.297,2.492l-0.009-1.408c2.718-1.033,7.092-1.704,12.024-1.704
								C55.661,22.226,59.648,22.769,62.383,23.631z" />

							<path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#2A100A"
								stroke-width="1.167" stroke-linecap="round" stroke-miterlimit="2.6131" d="
								M48.769,34.872c0,0,2.086,1.539,5.132,0.008" />
							<g>
								<path fill="#2A100A" d="M50.51,37.077l0.119,0.465l-0.007,0.004l-0.007,0.006l-0.007,0.002l-0.007,0.004l-0.007,0.002
									l-0.008,0.002l-0.007,0.002h-0.007h-0.008l-0.007-0.002L50.55,37.56l-0.008-0.002l-0.006-0.002l-0.007-0.002l-0.007-0.004
									l-0.006-0.004l-0.007-0.006l-0.006-0.004l-0.006-0.006l-0.006-0.008l-0.006-0.006l-0.006-0.008l-0.005-0.006l-0.005-0.01
									l-0.005-0.008l-0.004-0.01l-0.005-0.01l-0.004-0.01l-0.004-0.01l-0.003-0.012l-0.003-0.012l-0.003-0.012l-0.003-0.012
									l-0.002-0.012l-0.002-0.014l-0.001-0.012l-0.001-0.012l-0.001-0.014l0-0.012v-0.012V37.3v-0.012l0.001-0.012l0.001-0.012
									l0.001-0.014l0.002-0.01l0.002-0.014l0.003-0.012l0.002-0.01l0.003-0.012l0.003-0.01l0.004-0.012l0.004-0.01l0.004-0.01
									l0.004-0.008l0.005-0.01l0.005-0.01l0.005-0.008l0.005-0.008l0.006-0.008l0.006-0.006l0.007-0.008l0.006-0.006L50.51,37.077
									L50.51,37.077z M52.214,37.462l-0.231-0.318l-0.008,0.293l0.046,0.072l0.009,0.008l-0.008-0.006l-0.017-0.006l-0.025-0.01
									l-0.03-0.01l-0.036-0.008l-0.04-0.012l-0.045-0.01l-0.047-0.008l-0.051-0.01l-0.054-0.008l-0.056-0.008l-0.059-0.006l-0.06-0.006
									l-0.061-0.006l-0.063-0.002l-0.063-0.004h-0.063l-0.063,0.002l-0.062,0.002l-0.061,0.006l-0.06,0.008l-0.058,0.008l-0.056,0.01
									l-0.053,0.014l-0.051,0.014l-0.046,0.018l-0.042,0.02l-0.038,0.021l-0.032,0.021l-0.119-0.465l0.052-0.035l0.054-0.029
									l0.057-0.025l0.059-0.021l0.061-0.018l0.062-0.016l0.064-0.012l0.065-0.012l0.066-0.006l0.067-0.006l0.067-0.002l0.067-0.002
									h0.068l0.067,0.002l0.065,0.004l0.066,0.004l0.063,0.006l0.062,0.008l0.06,0.008l0.057,0.01l0.055,0.01l0.052,0.01l0.048,0.01
									l0.044,0.012L52,36.987l0.037,0.012l0.034,0.012l0.031,0.012l0.029,0.016l0.033,0.027l0.06,0.088L52.214,37.462L52.214,37.462z
									M51.983,37.144l0.231,0.318l-0.005,0.01l-0.005,0.008l-0.005,0.01l-0.006,0.01l-0.006,0.006l-0.006,0.008l-0.006,0.008
									l-0.006,0.006l-0.006,0.006l-0.006,0.004l-0.007,0.004l-0.006,0.004l-0.007,0.004l-0.007,0.004h-0.007l-0.008,0.002l-0.007,0.002
									h-0.007h-0.007l-0.007-0.002h-0.007l-0.007-0.002l-0.007-0.004l-0.007-0.002l-0.007-0.004l-0.007-0.004l-0.007-0.004l-0.006-0.006
									l-0.006-0.006l-0.006-0.008l-0.006-0.006l-0.006-0.01L52,37.491l-0.005-0.008l-0.005-0.01l-0.004-0.01l-0.005-0.01l-0.004-0.012
									l-0.004-0.01l-0.003-0.01l-0.003-0.012l-0.003-0.012l-0.002-0.012l-0.003-0.012l-0.001-0.01l-0.002-0.012l-0.001-0.014l0-0.012
									l0-0.012l0-0.012l0-0.012l0-0.014l0-0.012l0.001-0.012l0.001-0.012l0.002-0.012l0.001-0.014l0.002-0.01l0.003-0.012l0.003-0.012
									l0.003-0.012l0.004-0.01l0.004-0.012L51.983,37.144z" />
							</g>
							<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" fill="#000001" d="M60.076,25.364
								c1.235,0.026,1.771,0.672,3.035,0.672c0.784-0.008,0.701,1.276,0.287,1.752c-0.565,0.553-0.752,0.773-0.83,1.471
								c-0.002,0.652-0.089,1.338-0.228,2.023c-1.384,5.896-9.588,3.791-10.522-1.795l-0.034-0.053c-0.152-0.424-0.432-0.709-0.753-0.709
								c-0.33,0-0.618,0.301-0.766,0.746c-0.921,5.598-9.139,7.713-10.525,1.811c-0.163-0.807-0.255-1.615-0.221-2.369
								c-0.009,0.121-0.013,0.234-0.015,0.346c-0.077-0.697-0.265-0.918-0.83-1.471c-0.414-0.476-0.497-1.76,0.288-1.752
								c1.539,0,3.899-1.017,6.289-1.017c2.371,0.141,3.624,0.491,4.296,1.06l-0.004-0.005c0.324,0.171,0.872,0.284,1.494,0.284
								c0.641,0,1.204-0.12,1.523-0.3c0.678-0.556,1.93-0.899,4.271-1.038C58.313,25.019,59.341,25.147,60.076,25.364z" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M60.874,24.703c1.304,0.027,1.868,0.673,3.203,0.673
								c0.828-0.008,0.741,1.276,0.303,1.751c-0.596,0.553-0.794,0.774-0.876,1.471c-0.002,0.652-0.094,1.338-0.24,2.021
								c-1.461,5.9-10.118,3.793-11.104-1.793l-0.036-0.053c-0.16-0.424-0.456-0.709-0.794-0.709c-0.349,0-0.652,0.301-0.809,0.746
								c-0.973,5.598-9.644,7.713-11.106,1.809c-0.171-0.805-0.269-1.613-0.233-2.369c-0.009,0.121-0.013,0.238-0.015,0.348
								c-0.082-0.697-0.279-0.918-0.875-1.471c-0.437-0.475-0.525-1.759,0.303-1.751c1.625,0,4.115-1.017,6.636-1.017
								c2.502,0.141,3.825,0.491,4.533,1.06l-0.004-0.005c0.342,0.171,0.92,0.284,1.576,0.284c0.677,0,1.271-0.12,1.607-0.299
								c0.715-0.556,2.037-0.9,4.506-1.039C59.014,24.359,60.098,24.487,60.874,24.703z" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M49.886,10.032c0.27-0.036,0.546-0.063,0.83-0.079L50.714,9.94
								c0-0.02,0-0.039,0-0.057c0-0.23,0.057-0.439,0.148-0.59v0l0,0c0.092-0.151,0.22-0.245,0.359-0.245c0.14,0,0.267,0.094,0.36,0.245
								l0,0c0.091,0.151,0.148,0.36,0.148,0.59c0,0.015,0,0.033-0.001,0.05L51.728,9.95c0.273,0.014,0.55,0.041,0.829,0.082
								c-0.101-0.965-0.572-1.719-1.162-1.844l0,0l-0.035-0.007l0,0l-0.031-0.004l-0.002-0.001h-0.001l-0.002,0l-0.031-0.003l-0.001,0l0,0
								h0L51.257,8.17h0l0,0h0l-0.035,0l-0.035,0l0,0l0,0h0l-0.034,0.002h0l0,0l-0.001,0L51.12,8.176l-0.002,0h-0.001l-0.003,0.001
								l-0.031,0.004h0l-0.034,0.007l0,0C50.458,8.313,49.986,9.067,49.886,10.032z" />
							<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M42.527,7.231c-3.94,0-7.134,0.589-7.134,1.314
									c0,0.726,3.194,1.315,7.134,1.315s7.134-0.589,7.134-1.315C49.661,7.82,46.467,7.231,42.527,7.231z" />
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" d="M59.916,7.231c3.939,0,7.134,0.589,7.134,1.315
									c0,0.726-3.194,1.314-7.134,1.314c-3.94,0-7.134-0.588-7.134-1.314C52.782,7.82,55.976,7.231,59.916,7.231z" />
							</g>
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFCE88"
								d="M45.161,25.369c4.019,0.226,4.213,1.133,4.277,2.776
								c-0.064,5.01-7.675,7.154-8.901,2.201c-0.274-1.285-0.309-2.578,0.268-3.511C41.3,26.036,41.976,25.369,45.161,25.369z" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFCE88"
								d="M57.517,25.369c-4.02,0.226-4.213,1.133-4.277,2.776
								c0.064,5.01,7.674,7.154,8.901,2.201c0.273-1.285,0.308-2.578-0.268-3.511C61.377,26.036,60.702,25.369,57.517,25.369z" />
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" points="61.347,29.12 58.06,27.25 57.79,28.128 59.439,29.114 
								57.812,30.081 58.083,30.978 	" />
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" points="56.937,26.886 57.635,26.886 56.293,31.024 
								55.595,31.024 	" />
							<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#2A100A" points="42.54,29.138 45.899,27.226 46.176,28.122 44.49,29.132 
								46.153,30.12 45.877,31.038 	" />
							<g>
								<path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M44.813,25.968c-2.095,0-2.64,0.313-3.086,0.69
									c-0.52,0.438-0.693,1.046-0.707,1.651c0.015,0.58,0.356,0.953,0.873,1.15c-0.195-0.203-0.313-0.469-0.321-0.801
									c0.014-0.605,0.188-1.215,0.707-1.652c0.447-0.376,0.992-0.689,3.087-0.689c0.895,0.036,1.481,0.109,1.857,0.223
									C47.042,26.223,46.43,26.034,44.813,25.968z" />
								<path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M57.637,25.968c-2.095,0-2.641,0.313-3.087,0.69
									c-0.521,0.438-0.693,1.046-0.708,1.651c0.015,0.58,0.356,0.953,0.874,1.15c-0.196-0.203-0.313-0.469-0.321-0.801
									c0.014-0.605,0.188-1.215,0.707-1.652c0.447-0.376,0.993-0.689,3.087-0.689c0.895,0.036,1.481,0.109,1.858,0.223
									C59.864,26.223,59.252,26.034,57.637,25.968z" />
							</g>
							<path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" fill="#000001" d="M62.417,24.581l7.641,3.064
								c0.143,0.068,0.096,0.254,0.085,0.346c-0.011,0.09-1.248,2.254-4.252,2.877c-3.005,0.625-5.205-2.182-5.205-2.182l-4.928-5.515
								l3.181,0.438L62.417,24.581z" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#192866"
								d="M63.419,24.381l7.627,2.796c0.159,0.066,0.106,0.246,0.094,0.332
								c-0.012,0.086-1.38,2.164-4.705,2.766c-3.325,0.598-5.759-2.098-5.759-2.098l-5.79-5.634l6.488,0.9L63.419,24.381z" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#5ABD88"
								d="M51.221,9.932c6.738,0,12.2,5.462,12.2,12.201l0.001,1.866
								c-2.703-1.072-7.16-1.772-12.201-1.772s-9.498,0.7-12.201,1.772v-1.866C39.021,15.394,44.483,9.932,51.221,9.932z" />
							<path fill-rule="evenodd" clip-rule="evenodd" fill="#192866" d="M60.089,23.044V22.47c0-6.094-3.009-11.184-7.021-12.399
								c5.861,0.891,10.352,5.952,10.352,12.062l0.001,1.866C62.5,23.632,61.374,23.31,60.089,23.044L60.089,23.044z M51.221,9.932
								L51.221,9.932c-2.272,0.001-4.118,5.559-4.156,12.459c1.319-0.107,2.714-0.165,4.156-0.165c1.442,0,2.836,0.058,4.156,0.165
								C55.339,15.49,53.493,9.932,51.221,9.932L51.221,9.932L51.221,9.932z M42.353,23.044c-1.284,0.266-2.41,0.588-3.332,0.954v-1.866
								c0-6.109,4.49-11.169,10.351-12.062c-4.01,1.217-7.019,6.305-7.019,12.399V23.044z" />
							<path fill="#2A100A" d="M63.419,23.996l0,0.385c-3.474-1.376-8.462-1.827-12.199-1.827c-3.722,0-9.509,0.688-12.199,1.829l0-0.385
								c3.333-1.333,8.672-1.809,12.2-1.809C54.747,22.188,60.236,22.692,63.419,23.996z" />
						</g>
					</svg>
				</a>
			</div>
		</div>

	</nav>
	<!--End Nav bar -->
	<!-- Header Ends -->

	<!-- Sidebar Starts -->
	<div class="pmd-sidebar-overlay"></div>

	<!-- Left sidebar -->
	<aside
		class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons"
		role="navigation">
		<ul class="nav pmd-sidebar-nav">

			<!-- User info -->
			<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
				<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media"
					data-sidebar="true" aria-expandedhref="javascript:void(0);">
					<div class="media-left">
						<img src="<?php echo $app->config["site"]; ?>/public/images/user-icon.png" alt="New User">
					</div>
					<div class="media-body media-middle"><?php echo $_SESSION["pengguna"]->nama; ?></div>
					<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $app->config["site"]; ?>/admin/Pengguna/logout">Logout</a></li>
				</ul>
			</li>
			<!-- End user info -->

			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin">
					<i class="media-left media-middle">
						<svg version="1.1" x="0px" y="0px" width="19.83px" height="18px"
							viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
							xml:space="preserve">
							<g>
								<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
									M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z" />
							</g>
						</svg>
					</i>
					<span class="media-body">Dashboard</span>
				</a>
			</li>
			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin/Pengguna">
					<i class="media-left media-middle">
						<i class="material-icons md-light pmd-sm" style="min-width: 0px;">accessibility</i>
					</i>
					<span class="media-body">Pengguna</span>
				</a>
			</li>
			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin/Fakultas">
					<i class="media-left media-middle">
						<i class="material-icons md-light pmd-sm" style="min-width: 0px;">favorite_border</i>
					</i>
					<span class="media-body">Fakultas</span>
				</a>
			</li>
			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin/Jurusan">
					<i class="media-left media-middle">
						<i class="material-icons md-light pmd-sm" style="min-width: 0px;">school</i>
					</i>
					<span class="media-body">Jurusan</span>
				</a>
			</li>
			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin/Mahasiswa">
					<i class="media-left media-middle">
						<i class="material-icons md-light pmd-sm" style="min-width: 0px;">face</i>
					</i>
					<span class="media-body">Mahasiswa</span>
				</a>
			</li>
			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin/Konten">
					<i class="media-left media-middle">
						<i class="material-icons md-light pmd-sm" style="min-width: 0px;">announcement</i>
					</i>
					<span class="media-body">Konten</span>
				</a>
			</li>
			<li>
				<a class="pmd-ripple-effect" href="<?php echo $app->config["site"]; ?>/admin/Pengguna/logout">
					<i class="media-left media-middle">
						<i class="material-icons md-light pmd-sm" style="min-width: 0px;">exit_to_app</i>
					</i>
					<span class="media-body">Logout</span>
				</a>
			</li>

		</ul>
	</aside>
	<!-- End Left sidebar -->
	<!-- Sidebar ends -->

	<!-- Content area start -->
	<div id="content" class="pmd-content" style="margin-top:15px;">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php echo $content; ?>
				</div>
			</div>
		</div>

	</div>
	<!--end content area-->

	<!-- Scripts Starts -->
	<script src="<?php echo $app->config["site"]; ?>/public/js/jquery-1.12.2.min.js"></script>
	<script src="<?php echo $app->config["site"]; ?>/public/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {
			var sPath = window.location.pathname;
			var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
			$(".pmd-sidebar-nav").each(function () {
				$(this).find("a[href='" + sPage + "']").parents(".dropdown").addClass("open");
				$(this).find("a[href='" + sPage + "']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
				$(this).find("a[href='" + sPage + "']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
				$(this).find("a[href='" + sPage + "']").addClass("active");
			});
		});
	</script>

	<script src="<?php echo $app->config["site"]; ?>/public/js/propeller.min.js"></script>

	<script src="<?php echo $app->config["site"]; ?>/public/js/highcharts.js"></script>
	<script src="<?php echo $app->config["site"]; ?>/public/js/highcharts-more.js"></script>

	<script
		src="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/js/moment-with-locales.js"></script>
	<script
		src="<?php echo $app->config["site"]; ?>/public/components/datetimepicker/js/bootstrap-datetimepicker.js"></script>

	<script
		src="<?php echo $app->config["site"]; ?>/public/components/data-table/media/js/jquery.dataTables.min.js"></script>
	<script
		src="<?php echo $app->config["site"]; ?>/public/components/data-table/media/js/dataTables.bootstrap.min.js"></script>
	<script
		src="<?php echo $app->config["site"]; ?>/public/components/data-table/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script
		src="<?php echo $app->config["site"]; ?>/public/components/data-table/extensions/Select/js/dataTables.select.min.js"></script>
</body>

</html>