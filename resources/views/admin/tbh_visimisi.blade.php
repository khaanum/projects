@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
        Tambah Visi & Misi
        <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
        <li><a href="/admin/visimisi">Visi&Misi</a></li>
        <li class="nonactive"><a href="/admin/visimisi/create">Create Visi&Misi</a></li>
    </ol>
</section>

<section class="content">
  <form method="POST" action="{{ route ('admin.a-visimisi.store') }}">

    {{ csrf_field() }}

    {{ method_field('POST') }}

    <div class="form-group">
      <!-- <textarea name="content" rows="8" cols="80" class="form-control"></textarea> -->
        <div class="box">
              <div class="box-header">
                <i class=" fa fa-text-width"></i>
                <h3 class="box-title">Tambah Data Visi&Misi</h3>
              </div>
                <!-- /.box-header -->
              <div class="box-body pad">
                <form>
                    <textarea class="textarea" name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </form>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="save">
              </div>
            </div>
    </div>
  </form>
</section>
@endsection

