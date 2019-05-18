<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>gtech</title>
  <!-- Bootstrap CSS -->
  <base href='{{asset("")}}'>
  <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('public/admin/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('public/admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('public/admin/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('public/admin/css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="public/js/html5shiv.js"></script>
      <script src="public/js/respond.min.js"></script>
      <script src="public/js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg"> 
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="admin" class="logo">Trang <span class="lite">Chủ</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <!-- <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul> -->
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            @if(Auth::check())
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/profile.png" width="30px" height="auto">
                            </span>
                            <span class="username">{{Auth::user()->name}}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="admin/profile/ho-so"><i class="icon_profile"></i> Hồ sơ</a>
              </li>
              <li class="eborder-top">
                <a href="admin/user/them-admin"><i class="icon_plus"></i> Thêm tài khoản Admin</a>
              </li>
              <li>
                <a href="admin/logout"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
            
          </li>
          @endif
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="admin">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          

           <!--  <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>User</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/user/danh-sach">Danh Sách</a></li>
              <li><a class="" href="admin/user/them"><span>Thêm</span></a></li>
            </ul>
          </li> -->


          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Lĩnh vực</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/linh-vuc/danh-sach">Danh Sách</a></li>
              <li><a class="" href="admin/linh-vuc/them"><span>Thêm</span></a></li>
            </ul>
          </li>

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Danh mục</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/danh-muc/danh-sach">Danh Sách</a></li>
              <li><a class="" href="admin/danh-muc/them"><span>Thêm</span></a></li>
            </ul>
          </li>

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Danh mục con</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/danh-muc-con/danh-sach">Danh Sách</a></li>
              <li><a class="" href="admin/danh-muc-con/them"><span>Thêm</span></a></li>
            </ul>
          </li>

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Bài Viết</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="admin/bai-viet/danh-sach">Danh Sách</a></li>
              <li><a class="" href="admin/bai-viet/them"><span>Thêm</span></a></li>
            </ul>
          </li>
        
          <li>
            <a class="" href="admin/gioi-thieu/chi-tiet">
                          <i class="icon_documents_alt"></i>
                          <span>Giới thiệu</span>
                      </a>

          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <!-- <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Pages</li>
            </ol> -->
          </div>
        </div>
        <!-- page start-->
        @yield('content')
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{asset('public/admin/js/jquery.js')}}"></script>
  <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('public/admin/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('public/admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="{{asset('public/admin/js/scripts.js')}}"></script>
  @yield('script')


</body>

</html>
