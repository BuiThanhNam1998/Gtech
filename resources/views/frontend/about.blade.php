@extends("frontend.layout.layout")
@section('content')
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="">Trang chủ</a></li>
								<li>Giới thiệu</li>
							</ul>
							<h1>Giới thiệu</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="section-row">
							{!!$gioithieu->noidung!!}
						</div>
					</div>
					
					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./public/frontend/img/logo1.png" alt="gtech" width="300px" height="250px">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget" style="margin-left: 20px">
							<div class="section-title">
								<h2>Bài viết gần đây</h2>
							</div>
							@foreach($baivietganday as $bvgd)
							<div class="post post-widget">
								<!-- <a class="post-img" href="blog-post.html"><img src="./public/frontend/img/widget-1.jpg" alt=""></a> -->
								<div class="post-body">
									<h3 class="post-title"><a href="bai-dang/{{$bvgd->slug}}">
										{{$bvgd->tieude}}
									</a></h3>
									<span><a href="bai-dang/{{$bvgd->danhmuccon->baiviet->first()->slug}}">{{$bvgd->danhmuccon->ten}}</a></span>
								</div>
							</div>
							@endforeach
						</div>
						<!-- /post widget -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		
		<!-- /Footer -->

	@endsection
