<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VietNamTravel</title>

	<script type="text/javascript" src="resourceVNT/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="resourceVNT/js/bootstrap.js"></script>
	<script src="resourceVNT/js/fontawesome-all.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="resourceVNT/css/bootstrap.css">
	<link rel="stylesheet" href="resourceVNT/css/style.index.css">
	<link rel="stylesheet" href="resourceVNT/css/menu-style.css">
	<link rel="stylesheet" href="resourceVNT/css/user.css">
</head>
<body>
	
	<!-- ========== icon =========== -->
	<div class="icon-bar">
		<ul>
			<li class="search">
				<a href="###">
					<div class="icon"><i class="fas fa-search"></i></div>
					<div class="slider">
						<p>Search</p>
					</div>
				</a>
			</li>
			<li class="facebook">
				<a href="#">
					<div class="icon"><i class="fab fa-facebook-f"></i></div>
					<div class="slider">
						<p>Facebook</p>
					</div>
				</a>
			</li>
			<li class="google">
				<a href="#">
					<div class="icon"><i class="fab fa-google-plus-g"></i></div>
					<div class="slider">
						<p>Google</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<div class="icon-scroll-top" id="id-icon-scroll-top"><a><i class="fas fa-arrow-up"></i></a></div>
	<!-- ========== end icon =========== -->

	<!-- ================== header ============= -->
	<section class="header">
		<div class="container">
			<div class="layer-top" id="id-layer-top">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light menuTop" id="id-menu-Top">
						<a class="navbar-brand" href="#">VietNamTour</a>
						<!-- <button class="btn btn-success navbar-toggler" id="btnsearch-xs"><i class="fas fa-search"></i></button> -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: white; background-color: white;">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item btn-select" >
									<a id="a-tinhTP" class="nav-link a-select" data-hienthi="tinhTP" href="#">Cần Thơ <i class="fas fa-angle-down"></i></a>

									<div class="select-content" id="tinhTP">
										<div class="caption-h5">
						  					<h5><i class="fas fa-globe"></i> Tỉnh thành phố</h5>
						  				</div>

						  				<ul>
						  					<li class="selectItem" data-name="Cần Thơ">
						  						<a href="" class="selectItem-name">
						  							<label>Cần Thơ</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  					<li class="selectItem" data-name="HCM">
						  						<a href="" class="selectItem-name">
						  							<label>HCM</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  					<li class="selectItem" data-name="Hà Nội">
						  						<a href="" class="selectItem-name">
						  							<label>Hà Nội</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  				</ul>
									</div>
								</li> <!-- end btn-select -->
								<li class="nav-item btn-select">
									<a id="a-danhmuc" class="nav-link a-select" data-hienthi="danhmuc" href="#">Tham quan <i class="fas fa-angle-down"></i></a>
									<div class="select-content" id="danhmuc">
										<div class="caption-h5">
						  					<h5><i class="fas fa-globe"></i> Danh mục</h5>
						  				</div>

						  				<ul>
						  					<li class="selectItem2" data-name="Cân Thơ">
						  						<a href="" class="selectItem-name2">
						  							<label>Tham quan</label>
						  							<span class="float-right">1234</span>
						  						</a>
						  					</li>
						  					<li class="selectItem2" data-name="HCM">
						  						<a href="" class="selectItem-name2">
						  							<label>Ăn uống</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  					<li class="selectItem2" data-name="Hà Nội">
						  						<a href="" class="selectItem-name2">
						  							<label>Khách sạn</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  					<li class="selectItem2" data-name="Hà Nội">
						  						<a href="" class="selectItem-name2">
						  							<label>Vui chơi</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  					<li class="selectItem2" data-name="Hà Nội">
						  						<a href="" class="selectItem-name2">
						  							<label>Phương tiện</label>
						  							<span class="float-right">12.000</span>
						  						</a>
						  					</li>
						  				</ul>
									</div>
								</li><!-- end btn-select -->
								<li class="nav-item hidden-xs" style="position: relative;">
									<form class="form-inline form-search">
										<label class="boloc"><i class="fas fa-search"></i></label>
										<input id="text-search-top" class="form-control input-search" type="search" placeholder="Search" aria-label="Search">
										<button class="btn btn-outline-success btn-search" type="submit">Tìm kiếm</button>
									</form>
									<div class="body-search">
										<div class="item-search">
											<div class="title-search">
												<h5>Từ khóa tìm kiếm nhiều nhất</h5>
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
										</div>

										<div class="item-search">
											<div class="title-search">
												<h5>Lịch sử tìm kiếm</h5>
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="form-inline my-2 my-lg-0" id="dangnhap-dangky">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item" style="position: relative;">
										<a href="login.html" class="nav-link btn-login" id="btn-dangnhap">Đăng nhập</a>
										<!-- hien thi khi dang nhap thanh cong -->
										<a class="nav-link btn-login hidden" style="padding: 0; border: none !important;" id="id-user-form">
											<img src="images/avatar1.jpg" alt="" style="height: 33px; width: 33px;">
											lamthemen <i class="fas fa-caret-down"></i>
										</a>
										<div class="user-form">
											<ul>
												<li><a href=""><i class="fas fa-info-circle"></i> Thông tin tài khoản</a></li>
												<li><a href=""><i class="fas fa-book"></i> Góp ý</a></li>
												<li><a href=""><i class="fas fa-power-off"></i> Đăng xuất</a></li>
											</ul>
										</div> <!-- end hien thi khi dang nhap thanh cong -->
									</li>
									<!-- Modal login -->
									<!-- <div id="id01" class="modal-login">
										<div class="container">
											<div class="row">
												<div class="col"></div>
												<div class="col-6">
													<form action="" class="modal-content-dangky animate">
														<span onclick="document.getElementById('id01').style.display='none'" 
														class="close" title="Close Modal">&times;</span>
														<h3 class="text-center">Login</h3>
														<div class="content-login">
															<input type="text" placeholder="Username..." class="text-login">
															<input type="password" placeholder="Password..." class="text-login">
															<div class="row">
																<div class="col">
																	<button type="submit" class="btn btn-success" style="width: 100%; font-weight: 500; margin-top: 10px;">Log In</button>
																</div>
															</div>
														</div>
														<div class="content-login-with">
															<h4 class="text-center">Login</h4>
															<p class="text-center">With your social media acconut</p>
															<div class="row text-center">
																<div class="col"><a href="" class="btn" style="background-color: #3b5998;"><i class="fab fa-facebook-f"></i> Facebook</a></div>
																<div class="col"><a href="" class="btn" style="background-color: #d34836;"><i class="fab fa-google-plus-g"></i> Google+</a></div>
															</div>
														</div>
														<div class="content-register">
															<h6 class="text-center">Đăng ký tài khoản mới tại đây</h6>
															<div class="row">
																<div class="col">
																	<a class="btn btn-info" style="width: 100%; font-weight: 500;">Register</a>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="col"></div>
											</div>
										</div>
									</div> -->
									<!-- end Modal login -->

									<li class="nav-item"><a href="register.html" class="nav-link btn-login" id="btn-dangky">Đăng ký</a></li>
									<!-- Modal register -->
									<!-- <div id="id02" class="modal-login">
										<div class="container">
											<div class="row">
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<form action="" class="modal-content-dangky animate">
														<span onclick="document.getElementById('id02').style.display='none'" 
														class="close" title="Close Modal">&times;</span>
														<h3 class="text-center">Register</h3>
														<div class="content-login">
															<input type="text" placeholder="Username..." class="text-login" style="background-image: url(../images/icons/user.png);">
															<input type="password" placeholder="Password..." class="text-login">
															<input type="password" placeholder="index.complete.html" class="text-login">
															<div class="row">
																<div class="col">
																	<button type="submit" class="btn btn-success" style="width: 100%; font-weight: 500; margin-top: 10px;">Register</button>
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="col-md-4"></div>
											</div>
										</div>
									</div> -->
									<!-- end Modal register -->
								</ul>
							</div>
						</div>
					</nav>
					<div class="con" id="id-con">
						<div class="row">
							<div class="col-md-5 col-8">
								<div class="right-menu-lam">
									<ul class="float-left ul-right-menu-lam">
										<li class="active-menu"><a href=""><i class="fas fa-home"></i></a></li>
										<li class="hover-menu"><a href="">Địa điểm</a></li>
										<li class="hover-menu"><a href="">Bài viết</a></li>
										<li class="hover-menu"><a href="">Liên hệ</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-5 hidden-xs">
								<div class="ssearch" id="hidden-formSearch" style="position: relative; display: none; transition: 0.5s; margin-top: -2px;">
									<form action="" class="form-search-menu">
										<label class="boloc2"><i class="fas fa-search"></i></label>
										<input type="text" class="input-search2" id="text-search-top-2">
										<button class="btn-search2">Tìm kiếm</button>
									</form>
									<div class="body-search" style="top: 48px; left: 20px;">
										<div class="item-search">
											<div class="title-search">
												<h5>Từ khóa tìm kiếm nhiều nhất 2</h5>
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
										</div>

										<div class="item-search">
											<div class="title-search">
												<h5>Lịch sử tìm kiếm</h5>
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
											<div class="content-search">
												<a href="#">
													<div class="left-content-search">
														<img src="images/hotel/1.jpg" alt="">
													</div>
													<div class="right-content-search">
														<p>Mường Thanh Cần Thơ</p>
														<p style="font-size: 13px; color: #d2cece; font-weight: 400;">Lê Lợi, Cồn Cái Khế, P.Cái Khế, Q.Ninh Kiều, TP.Cần Thơ </p>
													</div>
												</a>		
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-4">
								<ul class="float-right left-menu-lam">
									<li class="cha-notification">
										<a class="a-notification active-thongbao" data-id-hienthi="id-thongBao"><i class="fas fa-bell"></i></a>
										<div class="notification" id="id-thongBao">
											<div class="title-nofi">
												<h6 class="text-center" style="padding: 0; font-weight: 700;">Thông báo</h6>
											</div>
											<div class="content-nofi">
												<ul id="body-nofi">
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
												</ul>
											</div>
											<div class="xem text-center">
												<a href="" style="color: black !important; font-size: 13px; padding: 5px; font-weight: 700;">
													Xem tất cả
												</a>
											</div>
										</div>
									</li>
									<li class="cha-notification">
										<a class="a-notification" data-id-hienthi="id-tuychinh"><i class="fas fa-plus"></i></a>
										<div class="notification" id="id-tuychinh">
											<div class="title-nofi">
												<h6 class="text-center" style="padding: 0; font-weight: 700;">Thông báo</h6>
											</div>
											<div class="content-nofi">
												<ul id="body-nofi">
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
													<li>
														<a href="" class="a-content-nofi">
															<div class="anh-nofi">
																<img src="images/diadiem.jpg" alt="" class="img-icon-nofi">
															</div>
															<p class="text-nofi">
																Get code suggestions while writing code directly to your Java IDE.
															</p>	
														</a>
													</li>
												</ul>
											</div>
											<div class="xem text-center">
												<a href="" style="color: black !important; font-size: 13px; padding: 5px; font-weight: 700;">
													Xem tất cả
												</a>
											</div>
										</div>
									</li>
									<!-- <li><a href=""><img src="images/icons/vn.png" alt="" style="width: 20px; height: 20px;"></a></li> -->
								</ul>
							</div>
						</div>
							
					</div>
				</div>	
			</div> <!-- end layer-top -->
		</div>
	</section>
	<!-- ================== end header ============= -->
	
	<section class="content-info">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-3 ">
						<div class="left-user">
							<div class="avatar">
								<img src="resourceVNT/images/avatar1.jpg" alt="">
								<h5 class="text-center">Lam The Men</h5>
							</div>
							<div class="options">
								<ul>
									<li class="active"><a href=""><i class="far fa-edit"></i> Thông tin tài khoản</a></li>
									<li><a href=""><i class="fas fa-lock"></i> Đổi mật khẩu</a></li>
									<li style="border-bottom: 1px solid #ddd;"><a href=""><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
								</ul>
							</div>
						</div>	
					</div>
					<div class="col-md-9">
						<div class="right-user">
							<div class="info-account">
								<h5 class="text-center" style="margin-top: 10px;">Thông tin tài khoản</h5>
								<form class="form-info">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputEmail4">Email</label>
											<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<label for="inputPassword4">Password</label>
											<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress">Address</label>
										<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputState">Quốc gia</label>
											<select id="inputState" class="form-control">
												<option selected>Việt Nam</option>
												<option>...</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Ngôn ngữ</label>
											<select id="inputState" class="form-control">
												<option selected>Việt Nam</option>
												<option>...</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Sign in</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ================== FOOTER ============= -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12 col-12">
					<p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
					<div class="address">
						<i class="fas fa-map-marker"></i>
						<span>1234 Vo Van Kiet CanTho</span>
					</div>
					<div class="address">
						<i class="fas fa-phone"></i>
						<span>0939 789 999</span>
					</div>
					<div class="address">
						<i class="fas fa-envelope"></i>
						<span>vietnamtravel@gmail.com</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-12">
					<div class="footer-text">
						<h3>Information</h3>
						<ul>
							<li><a href="#">Introduction</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Terms and Conditions</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Gop y</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-12">
					<div class="footer-text">
						<h3>Connect</h3>
						<ul>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Google</a></li>
							<li><a href="#">Twitter</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-12">
					<div class="footer-text">
						<h3>Information</h3>
						<ul>
							<li><a href="#">Introduction</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Terms and Conditions</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ================== END FOOTER ============= -->


	<!-- script -->
	<!-- <script src="js/menu-style.js"></script> -->
	<!-- end script -->
</body>
</html>