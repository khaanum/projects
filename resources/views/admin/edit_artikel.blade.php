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
          <div class="box box-info">
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


@endsection