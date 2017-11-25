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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nama Konten</th>
                        <th style="width: 120px">Action</th>
                      </tr>  
                    </thead>
                    <tbody>
                    @foreach($isdh as $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->title}}</td>
                      <td>
                        <div class="btn-group-center">
                          <form method="POST" action="/admin/isdh/{{$data->id}}/delete">
                             <a type="button" class="btn btn-info" href="/admin/isdh/{{$data->id}}"><i class="fa fa-eye"></i></a>
                            <a type="button" class="btn btn-success" href="/admin/isdh/{{$data->id}}/edit"><i class="fa fa-edit"></i></a>

                            {{method_field('DELETE')}}
                            <button type="delete" class="btn btn-danger" href="/admin/isdh/{{$data->id}}/delete"><i class="fa fa-trash"></i></button>{{csrf_field()}}
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
@endsection