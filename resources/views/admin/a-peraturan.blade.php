@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data peraturan
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/peraturan">peraturan</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
      <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-table"></i>
                <h3 class="box-title">peraturan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <a type="button" class="btn bg-navy margin" href="/admin/peraturan/create"><td>Tambah Peraturan</a>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>File Peraturan</th>
                        <th>Action</th>
                      </tr>
                </thead>
                    <tbody>
                      @foreach($peraturan as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->file}}</td>
                <td>
                <div class="btn-group-center">
                <form method="POST" action="/admin/peraturan/{{$data->id}}/delete">
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-danger" href="/admin/peraturan/{{$data->id}}/delete"><i class="fa fa-trash"></i> Hapus</button>
                  <input type="hidden" name="delete" value="delete">{{csrf_field()}}
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