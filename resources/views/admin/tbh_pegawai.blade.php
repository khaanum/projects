@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Tambah Data Pegawai
      <small>BPKH Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li><a href="/admin/pegawai">Tata Usaha</a></li>
            <li class="nonactive"><a href="/admin/pegawai/create">Create Pegawai</a></li>
          </ol>
</section>


<section class="content">
    <div class="form-group">
        <div class="box box-success">
              <div class="box-header with-border">
                <i class=" fa fa-edit"></i>
                <h3 class="box-title">Tambah Data Pegawai </h3>
              </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('admin.a-pegawai.store') }}">

                  {{ csrf_field() }} 

                  {{ method_field('POST') }}

                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nama_pegawai">Nama</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="nama_pegawai" placeholder="nama lengkap" name="nama_pegawai" >
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nip">Nip</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="nip" placeholder="nip" name="nip">
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="gol">Golongan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="gol" placeholder="golongan" name="gol">
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="jabatan">Jabatan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="jabatan" placeholder="jabatan" name="jabatan">
                        </div>
                      </div>
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