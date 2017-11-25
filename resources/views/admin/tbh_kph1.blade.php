@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Tambah Data Tabel 1
      <small>BPKH Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li><a href="/admin/ppkh">pkh1</a></li>
            <li class="nonactive"><a href="/admin/ppkh/create">Create ppkh</a></li>
          </ol>
</section>


<section class="content">
    <div class="form-group">
        <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Daftar Perhitungan Luas Kawasan Berdasarkan Peta Pada Paduserasi (TGHK dan RTRWP) Skala 1:250.000 Provinsi Kalimantan Barat</h3>
              </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('admin.a-ppkh.store') }}">

                  {{ csrf_field() }} 

                  {{ method_field('POST') }}

                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nama_ppkh">Kawasan Hutan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="nama_ppkh" placeholder="Kawasan Hutan" name="nama_ppkh" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nip">TGHK</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="nip" placeholder="tghk" name="nip">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="gol">RTRWP</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="gol" placeholder="rtrwp" name="gol">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="jabatan">Paduserasi</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="jabatan" placeholder="paduserasi" name="jabatan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="jabatan">Penunjukan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="jabatan" placeholder="penunjukan" name="jabatan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="jabatan">Keterangan</label>

                        <div class="col-md-7">
                          <input type="text" class="form-control" id="jabatan" placeholder="keterangan" name="jabatan">
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <input type="submit" class="btn btn-info" value="update">
                    </div>
                    <!-- /.box-footer -->
                </form>
        </div>
    </div>

 
</section>

@endsection