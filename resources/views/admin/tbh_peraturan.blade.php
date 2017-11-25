@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Tambah Data peraturan
      <small>BPKH Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="/admin/peraturan"><i class="fa fa-dashboard"></i>Peraturan</a></li>
            <li class="nonactive"><a href="/admin/peraturan/create">peraturan</a></li>
          </ol>
</section>


<section class="content">
    <div class="form-group">
        <div class="box box-success">
              <div class="box-header with-border">
                <i class=" fa fa-edit"></i>
                <h3 class="box-title">Tambah Data peraturan </h3>
              </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('admin.a-peraturan.store') }}" enctype="multipart/form-data">

                  {{ csrf_field() }} 

                  {{ method_field('POST') }}

                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="title">Judul</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="title" placeholder="judul peraturan" name="title" >
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="file">Upload File</label>
                        <div class="col-md-7">
                            <input class="form-control" type="file" id="file" name="file">
                      </div><br>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <input type="submit" class="btn btn-info" value="save">
                    </div>
                    <!-- /.box-footer -->
                </form>
        </div>
    </div>

 
</section>

@endsection