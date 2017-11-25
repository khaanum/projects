@extends('admin.layout.app')

@section('content')

      <section class="content-header">
          <h4>
            Struktur Organisasi
            <small>BPKH Wilayah III Pontianak</small>
          </h4>

          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li class="active"><a href="/admin/organisai">Struktur Organisasi</a></li>
          </ol>
      </section>


      <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <i class="fa fa-tag"></i>
                    <h3 class="box-title">Deskripsi Struktur Organisasi</h3>
                  </div>
            <!-- /.box-header -->
                  <div class="box-body">
                    <dl class="dl-horizontal">
                      @foreach($organisasi as  $data)
                        <p>{!!$data->content!!}</p>
                      @endforeach
                    </dl>
                  </div>
            <!-- /.box-body -->
                    <div class="box-footer">
                      <a class="btn bg-olive margin" href="/admin/organisasi/{$id}/edit"><i class="fa fa-pencil"></i><td>ubah</a> 
                    </div>
                </div> 
            </div>
        </div>  
      </section>
</div>

@endsection