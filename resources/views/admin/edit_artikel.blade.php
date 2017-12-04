@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Tambah Artikel
      <small>BPKH Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="/admin/artikel"><i class="fa fa-newspaper-o"></i>Artikel</a></li>
            <li><a href="/admin/artikel/create"><i class="fa fa-edit"></i>Artikel</a></li>
          </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="{{ route ('admin.a-artikel.edit', $artikel)}}" enctype="multipart/form-data"> 
    {{ csrf_field() }} 
    {{ method_field('PUT') }}

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
              <input class="form-control input-lg" type="text" placeholder="Judul artikel" name="title" value="{{ $artikel->title }}">
              <br>
              <form>
                    <textarea id="editor1" name="content" rows="10" cols="80">     
                    {{ $artikel->content }}                
                    </textarea>
              </form>
              <br>
              <img src="../../../adminpage/img/{{$artikel->image}}" style="width:50px;height:50px;" alt="">
              <div class="form-group">
                  
                  <label for="image">File input</label>
                  <input type="file" id="image" name="image">
              </div>
            </div>
            <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="update">
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </form>
</section>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
      <div class="box box-success">
              <!-- /.box-header -->
              <div class="box-body">
        <div class="box-header">
                <h3 class="box-title"><i class="fa fa-newspaper-o"></i> Komentar</h3>
              </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th> 
                        <th>Nama</th>
                        <th>Komentar</th>
                        <th style="width: 80px">Action</th>
                      </tr>
                </thead>
                    <tbody>
              @foreach($artikel->komentar as $data)
              <tr>
                <td class="text-center">{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->comment}}</td> 
                <td class="text-center">
                <div class="btn-group-center">
                    <form method="POST" action="/admin/edit_artikel/{{$data->id}}/delete">
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger" href="/admin/artikel/{{$data->id}}/delete"><i class="fa fa-trash"></i></button>
                        <input type="hidden" name="delete" value="delete">{{csrf_field()}}
                    </form>
                  </div>
                </td>
              </tr>
             @endforeach
                    </tbody>
                  </table>
              </div>
        </div>
      </div>
  </div>
</section>

    @include('admin.ckeditor')

  @include('admin.layout.partial.data_table')

@endsection