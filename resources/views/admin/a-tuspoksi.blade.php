@extends('admin.layout.app')

@section('content')

<section class="content-header">
          <h4>
            Tugas Pokok & Fungsi
            <small>BPKH Wilayah III Pontianak</small>
          </h4>

          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li class="active"><a href="/admin/tuspoksi">Tuspoksi</a></li>
          </ol>
      </section>


      <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <i class="fa fa-tag"></i>
                    <h3 class="box-title">Deskripsi Tugas Pokok & Fungsi</h3>
                  </div>
            <!-- /.box-header -->
                  <div class="box-body">
                    <dl class="dl-horizontal">
                      @foreach($tuspoksi as  $data)
                        <p>{!!$data->content!!}</p>
                      @endforeach
                    </dl>
                  </div>
            <!-- /.box-body -->
                  <div class="box-footer">
                      <a class="btn bg-olive margin" href="/admin/tuspoksi/{$id}/edit"><i class="fa fa-pencil"></i><td>Ubah</a>
                  </div>
                </div> 
            </div>
        </div>  
      </section>
@endsection