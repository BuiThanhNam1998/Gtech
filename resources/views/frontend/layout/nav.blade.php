	<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container" id="navbar">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li>
								<a href="">Trang chủ</a>
							</li>
							<li class="cat-4">
								<a href="javascript:void(0)">Lập trình web PHP</a>
								<ul class="sub-menu">
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==1 && $dmc->baiviet()->count()>0)
										<li class="cat-5">
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
							<li class="cat-4">
								<a href="javascript:void(0)">Lập trình Android</a>
								<ul class="sub-menu">
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==2 && $dmc->baiviet()->count()>0)
										<li class="cat-5">
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
							<li class="cat-4">
								<a href="javascript:void(0)">Lập trình Java</a>
								<ul class="sub-menu">
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==3 && $dmc->baiviet()->count()>0)
										<li class="cat-5">
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
							<li class="cat-4">
								<a href="javascript:void(0)">Lập trình C</a>
								<ul class="sub-menu">
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==4 && $dmc->baiviet()->count()>0)
										<li class="cat-5">
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="">Trang chủ</a></li>
							<li class="li-sub">
								<a href="about.html">Lập trình web PHP</a>
								<ul>
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==1 && $dmc->baiviet()->count()>0)
										<li>
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" class="fix-side">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
							<li class="li-sub">
								<a href="#">Lập trình Android</a>
								<ul>
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==2 && $dmc->baiviet()->count()>0)
										<li>
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="" class="fix-side">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
							<li>
								<a href="#">Lập trình Java</a>
								<ul>
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==3 && $dmc->baiviet()->count()>0)
										<li>
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="" class="fix-side">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
							<li>
								<a href="contact.html">Lập trình C</a>
								<ul>
									@foreach($danhmuccon as $dmc)
										@if($dmc->id_danhmuc==4 && $dmc->baiviet()->count()>0)
										<li>
											<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" title="" class="fix-side">{{$dmc->ten}}</a>
										</li>
										@endif
									@endforeach
								</ul>
							</li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
				
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
