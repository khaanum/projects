@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Ubah Data Pegawai
      <small>BPKH Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li><a href="/admin/pegawai">Tata Usaha</a></li>
            <li class="nonactive"><a href="/admin/pegawai/{{$pegawai->id}}/edit">Edit pegawai</a></li>
          </ol>
</section>


<section class="content">
   

    <div class="form-group">
      <!-- <textarea name="content" rows="8" cols="80" class="form-control"></textarea> -->
        <div class="box box-success">
              <div class="box-header with-border">
                <i class=" fa fa-edit"></i>
                <h3 class="box-title">Edit Data Pegawai </h3>
              </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('admin.a-pegawai.edit', $pegawai) }}" class="form-horizontal">

                    {{ csrf_field() }}

                    {{ method_field("PUT") }}

                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nama_pegawai">Nama</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="nama_pegawai" placeholder="nama" value="{{ $pegawai->nama_pegawai }}" name="nama_pegawai">
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nip">Nip</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="nip" placeholder="nip" value="{{ $pegawai->nip }}" name="nip">
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="gol">Golongan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="gol" placeholder="golongan" value="{{ $pegawai->gol }}" name="gol">
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="jabatan">Jabatan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="jabatan" placeholder="jabatan" value="{{ $pegawai->jabatan }}" name="jabatan">
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

 