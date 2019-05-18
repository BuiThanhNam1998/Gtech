@extends('admin.index')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Lĩnh vực</li>
              <li><i class="fa fa-square-o"></i>Thêm</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
           @if(session('message')) 
            <div class="alert alert-success fade in">
                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                 {{session('message')}}
                </div>
            @endif

            @if(count($errors)>0)
            <div class="alert alert-danger fade in">
              @foreach($errors->all() as $err)
                {{$err}}<br>
              @endforeach 
            </div>
            @endif
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Thêm
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="">
                  <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group ">
                      <label for="ten" class="control-label col-lg-2">Tên danh mục con<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="max" name="ten" type="text" value="{{$danhmuccon->ten}}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2" for="category">Lĩnh vực<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="linhvuc" id="linhvuc">
                          @foreach($linhvuc as $lv) 
                          <option value="{{$lv->id}}">
                            {{$lv->ten}}  
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-2" for="category">Danh mục<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="danhmuc" id="danhmuc">
                          @foreach($danhmuc as $dm) 
                          <option value="{{$dm->id}}">
                            {{$dm->ten}}  
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Lưu</button>
                        <button class="btn btn-default" type="reset">Hủy</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
@endsection
@section('script')
<!--footer end--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script>
function textCounter(field,cnt, maxlimit) {         
  var cntfield = document.getElementById(cnt) 
     if (field.value.length > maxlimit) // if too long...trim it!
    field.value = field.value.substring(0, maxlimit);
    // otherwise, update 'characters left' counter
    else
    cntfield.value = maxlimit - field.value.length;
}

// kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
var offset = 500;
// thời gian di trượt 0.75s ( 1000 = 1s )
var duration = 750;
$(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > offset)
      $('#top-up').fadeIn(duration);else
    $('#top-up').fadeOut(duration);
  });
  $('#top-up').click(function () {
    $('body,html').animate({scrollTop: 0}, duration);
  });
});
$(document).ready(function(){
  $(".huongdan_up360").click(function(){
    if(document.getElementById("postanh360").style.display=="none"){
      document.getElementById("postanh360").style.display="block";
      document.getElementById("icon-chevron-down").style.transform = 'rotate(180deg)';
      
    }else{
      document.getElementById("postanh360").style.display="none";
      document.getElementById("icon-chevron-down").style.transform = 'rotate(360deg)';

    }

  });
});
$(document).ready(function(){
  $("#tieude_menu2").hover(function(){
    $("#chuthich_tieude").css("display", "block")},function(){
      $("#chuthich_tieude").css("display","none");

    });

  $("#noidung_menu2").hover(function(){
    $("#chuthich_noidung").css("display", "block")},function(){
      $("#chuthich_noidung").css("display","none");

    });
  $("#tieude1").hover(function(){
    $("#chuthich_tieude1").css("display", "block")},function(){
      $("#chuthich_tieude1").css("display","none");

    });
});


$(document).ready(function(){
      $("#linhvuc").change(function(){
        var idLinhVuc = $(this).val();
        $.get("admin/ajax/danhmuc/"+idLinhVuc,function(data){
          $("#danhmuc").html(data);
        })
      });
    });

</script>
@endsection