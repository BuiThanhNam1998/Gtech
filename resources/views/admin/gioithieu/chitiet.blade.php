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
            <div class="col-lg-12">
              <header class="panel-heading">
                Danh Sách 
              </header>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nội dung</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{!!$gioithieu->noidung!!}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-info" href="admin/gioi-thieu/sua/{{$gioithieu->id}}">Sửa</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
            </div>
          </div>
@endsection