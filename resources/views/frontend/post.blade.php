@extends("frontend.layout.layout")
@push('meta')
<meta name="description" content="{{$baiviet->tomtat}}" />
@endpush
@section('content')
		<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('./public/frontend/img/post-page.jpg');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="bai-dang/{{$baiviet->danhmuccon->baiviet()->first()->slug}}">{{$baiviet->danhmuccon->ten}}</a>
								<span class="post-date">{{date_format($baiviet->created_at,'d M-y')}}</span>
							</div>
							<h1>{{$baiviet->tieude}}</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h3>{{$baiviet->tomtat}}</h3>
								<p>{!! $baiviet->noidung !!}}</p>
							</div>
							<div class="post-shares sticky-shares">
								<a href="https://www.facebook.com/gtechvntraining/" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<!-- /author -->
					
					</div>
					<!-- /Post content -->

					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>{{$baiviet->danhmuccon->ten}}</h2>
							</div>
							@foreach($baivietlienquan as $bv)
							<div class="post post-widget">
								<!-- <a class="post-img" href="blog-post.html" ">
									<img src="./public/frontend/img/widget-1.jpg" alt="">
								</a> -->
								<div class="post-body">
									<h3 class="post-title">
										@if($bv->id == $baiviet->id)
										<a href="bai-dang/{{$bv->slug}}" style="color: #ff8700 !important">{{$bv->tieude}}</a>
										@else
										<a href="bai-dang/{{$bv->slug}}">{{$bv->tieude}}</a>
										@endif
									</h3>
								</div>
							</div>
							@endforeach

						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Bài viết nổi bật</h2>
							</div>
							@foreach($baiviettop as $bv)
							<div class="post post-thumb">
								<div style="height: 100px"></div>
								<!-- <a class="post-img" href="blog-post.html"><img src="./public/frontend/img/post-2.jpg" alt=""></a> -->
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="#">
											{{$bv->danhmuccon->ten}}</a>
										<span class="post-date" style="color: black">
											{{date_format($bv->created_at,'d M-y')}}
										</span>
									</div>
									<h3 class="post-title">
										<a href="bai-dang/{{$bv->slug}}" style="color: black">
											{{$bv->tieude}}
										</a>
									</h3>
								</div>
							</div>
							@endforeach
						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Danh Mục</h2>
							</div>
							<div class="category-widget">
								<ul>
									@foreach($danhmuccon_sb as $dmc)
									@if($dmc->baiviet()->count()>0)
									<li>
										<a href="bai-dang/{{$dmc->baiviet()->first()->slug}}" class="cat-1">{{$dmc->ten}}
											<span>{{$dmc->baiviet()->count()}}</span>
										</a>
									</li>
									@endif
									@endforeach
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<!-- <div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /tags -->
						
						<!-- archive -->
						<!-- <div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">January 2018</a></li>
									<li><a href="#">Febuary 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /archive -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
@endsection
