@extends('admin.index') 
@section('content')
<div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>danh mục</li>
              <li><i class="fa fa-square-o"></i>Danh sách</li>
            </ol>
          </div>
        </div>
<div class="row">
   @if(session('message')) 
  <div class="alert alert-success fade in">
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
            <div class="col-lg-6">
              <header class="panel-heading">
                Danh Sách 
              </header>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Tên danh mục con</th>
                    <th>Danh mục</th>
                    <th>Lĩnh vực</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($danhmuccon as $dmc)
                  <tr>
                    <td>{{$dmc->ten}}</td>
                    <td>{{$dmc->danhmuc->ten}}</td>
                    <td>{{$dmc->danhmuc->linhvuc->ten}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-info" href="admin/danh-muc-con/sua/{{$dmc->slug}}">Sửa</a>
                        <form action="admin/danh-muc-con/xoa/{{$dmc->id}}" accept-charset="utf-8" method="post" style="float: left;">
                          <input type="hidden" name="_token" value="{{csrf_token()}}" />
                          <button type="submit" class="btn btn-warning">Xóa</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </section>
            </div>
          </div>
          {{$danhmuccon->links()}}
@endsection