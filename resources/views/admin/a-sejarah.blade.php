@extends('admin.layout.app')

@section('content')

      <section class="content-header">
          <h4>
            Sejarah
            <small>BPKH Wilayah III Pontianak</small>
          </h4>

          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li class="active"><a href="/admin/sejarah">Sejarah</a></li>
          </ol>
      </section>


      <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                   <i class="fa fa-tag"></i>
                    <h3 class="box-title">Deskripsi Sejarah</h3>
                  </div>
            <!-- /.box-header -->
                  <div class="box-body">
                    <ul class="list-unstyled">
                      @foreach($sejarah as  $data)
                      <p>{!!$data->content!!}</p>
                      @endforeach
                    </ul>
                  </div>
                  <div class="box-footer">
                          <a class="btn bg-olive margin" href="/admin/sejarah/{$id}/edit"><i class="fa fa-pencil"></i><td>Ubah</a>
                  </div>
            <!-- /.box-body -->
                </div> 
            </div>
        </div>  
      </section>

@endsection