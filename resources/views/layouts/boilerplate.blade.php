
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis2.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body data-background-color="custom" custom-background="../assets/img/bg_gradient2.png">
	<div class="wrapper horizontal-layout-3 fullwidth-style">
		
		<div class="main-header no-box-shadow" data-background-color="transparent">
			<div class="nav-top">
				<div class="container d-flex flex-row">
					<button class="navbar-toggler sidenav-toggler2 ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<!-- Logo Header -->
					<a href="index.html" class="logo logo-fixed d-flex align-items-center">
						<img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
						<img src="../assets/img/logo2.svg" alt="navbar brand" class="navbar-brand navbar-brand-logo-fixed">
					</a>
					<!-- End Logo Header -->

					<!-- Navbar Header -->
					<nav class="navbar navbar-header navbar-expand-lg p-0">
						<div class="container-fluid p-0">
							<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
										<i class="fa fa-search"></i>
									</a>
									<ul class="dropdown-menu dropdown-search animated fadeIn">
										<form class="navbar-left navbar-form nav-search">
											<div class="input-group">
												<input type="text" placeholder="Search ..." class="form-control">
											</div>
										</form>
									</ul>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-envelope"></i>
									</a>
									<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
										<li>
											<div class="dropdown-title d-flex justify-content-between align-items-center">
												Messages 									
												<a href="#" class="small">Mark all as read</a>
											</div>
										</li>
										<li>
											<div class="message-notif-scroll scrollbar-outer">
												<div class="notif-center">
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/jm_denis.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Jimmy Denis</span>
															<span class="block">
																How are you ?
															</span>
															<span class="time">5 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/chadengle.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Chad</span>
															<span class="block">
																Ok, Thanks !
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/mlane.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Jhon Doe</span>
															<span class="block">
																Ready for the meeting today...
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/talha.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Talha</span>
															<span class="block">
																Hi, Apa Kabar ?
															</span>
															<span class="time">17 minutes ago</span> 
														</div>
													</a>
												</div>
											</div>
										</li>
										<li>
											<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-bell"></i>
										<span class="notification">4</span>
									</a>
									<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
										<li>
											<div class="dropdown-title">You have 4 new notification</div>
										</li>
										<li>
											<div class="notif-scroll scrollbar-outer">
												<div class="notif-center">
													<a href="#">
														<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
														<div class="notif-content">
															<span class="block">
																New user registered
															</span>
															<span class="time">5 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
														<div class="notif-content">
															<span class="block">
																Rahmad commented on Admin
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/profile2.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="block">
																Reza send messages to you
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
														<div class="notif-content">
															<span class="block">
																Farrah liked Admin
															</span>
															<span class="time">17 minutes ago</span> 
														</div>
													</a>
												</div>
											</div>
										</li>
										<li>
											<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
										<i class="fas fa-layer-group"></i>
									</a>
									<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
										<div class="quick-actions-header">
											<span class="title mb-1">Quick Actions</span>
											<span class="subtitle op-8">Shortcuts</span>
										</div>
										<div class="quick-actions-scroll scrollbar-outer">
											<div class="quick-actions-items">
												<div class="row m-0">
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<div class="avatar-item bg-danger rounded-circle">
																<i class="far fa-calendar-alt"></i>
															</div>
															<span class="text">Calendar</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<div class="avatar-item bg-warning rounded-circle">
																<i class="fas fa-map"></i>
															</div>
															<span class="text">Maps</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<div class="avatar-item bg-info rounded-circle">
																<i class="fas fa-file-excel"></i>
															</div>
															<span class="text">Reports</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<div class="avatar-item bg-success rounded-circle">
																<i class="fas fa-envelope"></i>
															</div>
															<span class="text">Emails</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<div class="avatar-item bg-primary rounded-circle">
																<i class="fas fa-file-invoice-dollar"></i>
															</div>
															<span class="text">Invoice</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<div class="avatar-item bg-secondary rounded-circle">
																<i class="fas fa-credit-card"></i>
															</div>
															<span class="text">Payments</span>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link quick-sidebar-toggler">
										<i class="fa fa-th"></i>
									</a>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
										<div class="avatar-sm">
											<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
									</a>
									<ul class="dropdown-menu dropdown-user animated fadeIn">
										<div class="dropdown-user-scroll scrollbar-outer">
											<li>
												<div class="user-box">
													<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
													<div class="u-text">
														<h4>Hizrian</h4>
														<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
													</div>
												</div>
											</li>
											<li>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">My Profile</a>
												<a class="dropdown-item" href="#">My Balance</a>
												<a class="dropdown-item" href="#">Inbox</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Account Setting</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Logout</a>
											</li>
										</div>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
					<!-- End Navbar -->
				</div>
			</div>
		</div>

		<div class="pt-lg-2">
			<div class="container text-white pt-lg-2">
				<nav class="navbar navbar-tab navbar-header-left navbar-expand-lg p-0">
					<ul class="navbar-nav page-navigation">
						<h3 class="title-menu bg-primary d-flex d-lg-none"> 
							Menu 
							<div class="close-menu"> <i class="flaticon-cross"></i></div>
						</h3>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dashboard
							</a>
							<div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../demo1/index.html">Dashboard 1</a>
								<a class="dropdown-item" href="../demo2/index.html">Dashboard 2</a>
								<a class="dropdown-item" href="../demo3/index.html">Dashboard 3</a>
								<a class="dropdown-item" href="../demo4/index.html">Dashboard 4</a>
								<a class="dropdown-item" href="../demo5/index.html">Dashboard 5</a>
								<a class="dropdown-item" href="../demo6/index.html">Dashboard 6</a>
								<a class="dropdown-item" href="../demo7/index.html">Dashboard 7</a>
								<a class="dropdown-item" href="../demo8/index.html">Dashboard 8</a>
									<a class="dropdown-item" href="../demo9/index.html">Dashboard 9</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Apps
							</a>
							<div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="boards.html">Boards</a>
								<a class="dropdown-item" href="projects.html">Projects</a>
								<a class="dropdown-item" href="email-inbox.html">Email Inbox</a>
								<a class="dropdown-item" href="email-detail.html">Email Detail</a>
								<a class="dropdown-item" href="email-compose.html">Email Compose</a>
								<a class="dropdown-item" href="messages.html">Messages</a>
								<a class="dropdown-item" href="conversations.html">Conversations</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Projects
							</a>
							<div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="starter-template.html">Action</a>
								<a class="dropdown-item" href="starter-template.html">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="starter-template.html">Something else here</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="starter-template.html">Action</a>
								<a class="dropdown-item" href="starter-template.html">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="starter-template.html">Something else here</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="main-panel">
			<div class="container">
				<div class="page-inner page-inner-tab-style">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Pages</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Starter Page</a>
							</li>
						</ul>
					</div>
					<div class="page-category">Inner page content goes here</div>
				</div>
			</div>
		</div>
		<footer class="footer border-0 bg-transparent">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link text-white" href="http://www.themekita.com">
								ThemeKita
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#">
								Help
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="#">
								Licenses
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright text-white ml-auto">
					2018, made with <i class="fa fa-heart heart text-danger"></i> by <a class=" text-white" href="http://www.themekita.com">ThemeKita</a>
				</div>				
			</div>
		</footer>
		<div class="quick-sidebar">
			<a href="#" class="close-quick-sidebar">
				<i class="flaticon-cross"></i>
			</a>
			<div class="quick-sidebar-wrapper">
				<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
					<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Messages</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
				</ul>
				<div class="tab-content mt-3">
					<div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
						<div class="messages-contact">
							<div class="quick-wrapper">
								<div class="quick-scroll scrollbar-outer">
									<div class="quick-content contact-content">
										<span class="category-title mt-0">Contacts</span>
										<div class="avatar-group">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<span class="avatar-title rounded-circle border border-white">+</span>
											</div>
										</div>
										<span class="category-title">Recent</span>
										<div class="contact-list contact-list-recent">
											<div class="user">
												<a href="#">
													<div class="avatar avatar-online">
														<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">Jimmy Denis</span>
														<span class="message">How are you ?</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">Chad</span>
														<span class="message">Ok, Thanks !</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">John Doe</span>
														<span class="message">Ready for the meeting today with...</span>
													</div>
												</a>
											</div>
										</div>
										<span class="category-title">Other Contacts</span>
										<div class="contact-list">
											<div class="user">
												<a href="#">
													<div class="avatar avatar-online">
														<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Jimmy Denis</span>
														<span class="status">Online</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Chad</span>
														<span class="status">Active 2h ago</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-away">
														<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Talha</span>
														<span class="status">Away</span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="messages-wrapper">
							<div class="messages-title">
								<div class="user">
									<div class="avatar avatar-offline float-right ml-2">
										<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<span class="name">Chad</span>
									<span class="last-active">Active 2h ago</span>
								</div>
								<button class="return">
									<i class="flaticon-left-arrow-3"></i>
								</button>
							</div>
							<div class="messages-body messages-scroll scrollbar-outer">
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">Hello, Rian</div>
											</div>
											<div class="date">12.31</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-out">
										<div class="message-body">
											<div class="message-content">
												<div class="content">
													Hello, Chad
												</div>
											</div>
											<div class="message-content">
												<div class="content">
													What's up?
												</div>
											</div>
											<div class="date">12.35</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">
													Thanks
												</div>
											</div>
											<div class="message-content">
												<div class="content">
													When is the deadline of the project we are working on ?
												</div>
											</div>
											<div class="date">13.00</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-out">
										<div class="message-body">
											<div class="message-content">
												<div class="content">
													The deadline is about 2 months away
												</div>
											</div>
											<div class="date">13.10</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">
													Ok, Thanks !
												</div>
											</div>
											<div class="date">13.15</div>
										</div>
									</div>
								</div>
							</div>
							<div class="messages-form">
								<div class="messages-form-control">
									<input type="text" placeholder="Type here" class="form-control input-pill input-solid message-input">
								</div>
								<div class="messages-form-tool">
									<a href="#" class="attachment">
										<i class="flaticon-file"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tasks" role="tabpanel">
						<div class="quick-wrapper tasks-wrapper">
							<div class="tasks-scroll scrollbar-outer">
								<div class="tasks-content">
									<span class="category-title mt-0">Today</span>
									<ul class="tasks-list">
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Planning new project structure</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Add new Post</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Finalise the design proposal</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
									</ul>

									<span class="category-title">Tomorrow</span>
									<ul class="tasks-list">
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Initialize the project							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Updates changes to GitHub							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span title="This task is too long to be displayed in a normal space!" class="custom-control-label">This task is too long to be displayed in a normal space!				</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
									</ul>

									<div class="mt-3">
										<div class="btn btn-primary btn-rounded btn-sm">
											<span class="btn-label">
												<i class="fa fa-plus"></i>
											</span>
											Add Task
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="settings" role="tabpanel">
						<div class="quick-wrapper settings-wrapper">
							<div class="quick-scroll scrollbar-outer">
								<div class="quick-content settings-content">

									<span class="category-title mt-0">General Settings</span>
									<ul class="settings-list">
										<li>
											<span class="item-label">Enable Notifications</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Signin with social media</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Backup storage</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">SMS Alert</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
									</ul>

									<span class="category-title mt-0">Notifications</span>
									<ul class="settings-list">
										<li>
											<span class="item-label">Email Notifications</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">New Comments</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Chat Messages</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Project Updates</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">New Tasks</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis2.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>
</body>
</html>