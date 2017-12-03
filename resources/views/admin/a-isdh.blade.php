@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data isdh
      <small>Bisdh Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/isdh">isdh</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
      <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-table"></i>
                <h3 class="box-title">Tabel Konten ISDH</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <a type="button" class="btn bg-navy margin" href="/admin/isdh/create"><td>Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Daftar Konten</th>
                        <th>File ISDH</th>
                        <th style="width: 120px">Action</th>
                      </tr>  
                    </thead>
                    <tbody>
                    @foreach($isdh as $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->title_isdh}}</td>
                      <td>{{$data->file_isdh}}</td>
                      <td>
                        <div class="btn-group-center">
                          <form method="POST" action="/admin/isdh/{{$data->id}}/delete">
                            {{method_field('DELETE')}}
                            <button type="delete" class="btn btn-danger" href="/admin/isdh/{{$data->id}}/delete"><i class="fa fa-trash"></i> Hapus</button>{{csrf_field()}}
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
        </div>
        
      </div>
  </div>
</section>

  @include('admin.layout.partial.data_table')
@endsection