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
            <li class="nonactive"><a href="/admin/artikel/create"><i class="fa fa-plus"></i> Artikel</a></li>
          </ol>
</section>
                @if (count($errors)>0)
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
<!-- Main content -->
    <section class="content">
<form method="POST" action="{{route('admin.a-artikel.store')}}" enctype="multipart/form-data"> 
    {{ csrf_field() }} 
    {{ method_field('POST') }}

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body pad">
              <label for="title">Judul</label>
              <input class="form-control input-lg" type="text" placeholder="Judul artikel" name="title">
              <br>
              <form>
                <label for="editor1">Isi Artikel</label>
                    <textarea id="editor1" name="content" rows="10" cols="80">                     
                    </textarea>
              </form>
              <br>
              <div class="form-group">
                  <label for="image">Gambar</label>
                  <input type="file" id="image" name="image" required>
              </div>
            </div>
            <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="save">
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </form>
    </section>
@include('admin.ckeditor')

@endsection


