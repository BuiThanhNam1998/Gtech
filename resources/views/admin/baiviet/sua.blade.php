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
                Sửa
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="">
                  <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group ">
                      <label for="ten" class="control-label col-lg-2">Tiêu đề<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="tieude" name="tieude" type="text" value="{{$baiviet->tieude}}" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="summary" class="control-label col-lg-2">Tóm tắt<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="tomtat" name="tomtat" required >{{$baiviet->tomtat}}
                        </textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2">Nội dung<span class="required">*</span></label>
                        <div class="col-sm-10">
                          <textarea class="form-control ckeditor" name="noidung" rows="6" id="noidung">
                            {!!$baiviet->noidung !!}
                          </textarea>
                        </div>
                    </div> 

                    <div class="form-group">
                      <label class="control-label col-lg-2" for="category">Lĩnh vực<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="linhvuc" id="linhvuc">
                          @foreach($linhvuc as $lv) 
                          <option value="{{$lv->id}}"
                          @if($lv->id == $baiviet->danhmuccon->danhmuc->linhvuc->id)
                              {{"selected"}}
                          @endif>
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
                          <option value="0">--Danh mục--</option>
                          @foreach($danhmuc as $dm) 
                          <option value="{{$dm->id}}"
                          @if($dm->id == $baiviet->danhmuccon->danhmuc->id)
                              {{"selected"}}
                          @endif">
                            {{$dm->ten}}  
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-lg-2" for="category">Danh mục con<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control m-bot15" name="danhmuccon" id="danhmuccon">
                          <option value="0">--Danh mục con--</option>
                          @foreach($danhmuccon as $dmc) 
                          <option value="{{$dmc->id}}"
                          @if($dmc->id == $baiviet->danhmuccon->id)
                            {{"selected"}}
                          @endif">
                            {{$dmc->ten}}  
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
<script type="text/javascript" src="public/admin/assets/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'noidung', {
    filebrowserBrowseUrl: '{{ asset('public/admin/assets/ckfinder/ckfinder.html') }}',
    filebrowserImageBrowseUrl: '{{ asset('public/admin/assets/ckfinder/ckfinder.html?type=Images') }}',
    filebrowserFlashBrowseUrl: '{{ asset('public/admin/assets/ckfinder/ckfinder.html?type=Flash') }}',
    filebrowserUploadUrl: '{{ asset('public/admin/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
    filebrowserImageUploadUrl: '{{ asset('public/admin/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
    filebrowserFlashUploadUrl: '{{ asset('public/admin/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    });
</script>
<script>
  $(document).ready(function(){
      $("#linhvuc").change(function(){
        var idLinhVuc = $(this).val();
        $.get("admin/ajax/danhmuc/"+idLinhVuc,function(data){
          $("#danhmuc").html(data);
        })
      });
    });
  $(document).ready(function(){
      $("#danhmuc").change(function(){
        var idDanhMuc = $(this).val();
        $.get("admin/ajax/danhmuccon/"+idDanhMuc,function(data){
          $("#danhmuccon").html(data);
        })
      });
    });
</script>
@endsection