@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data pkh
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
      <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/pkh">PKH</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
      <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-table"></i>
                <h3 class="box-title">Tabel Konten PKH</h3>
              </div>
              @if ($message = Session::get ('success'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p>{{ $message }}</p>
                </div>
              @endif
              <!-- /.box-header -->
              <div class="box-body">
                <a type="button" class="btn bg-navy margin" href="/admin/pkh/create"><td>Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Daftar Konten</th>
                        <th>File PKH</th>
                        <th style="width: 120px">Action</th>
                      </tr>  
                    </thead>
                    <tbody>
                      <?php $no = $pkh ?>
                    @foreach($pkh as $data)
                      <?php $no++ ?>
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{$data->title_pkh}}</td>
                      <td>{{$data->file_pkh}}</td>
                      <td>
                        <div class="btn-group-center">
                          <form id="form{{$data->id}}" method="POST" action="/admin/pkh/{{$data->id}}/delete"> 
                            {{method_field('DELETE')}}
                            <button id="del{{$data->id}}" type="button" class="btn btn-danger" href="/admin/pkh/{{$data->id}}/delete"><i class="fa fa-trash"></i> Hapus</button>{{csrf_field()}}
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

<script type="text/javascript" src="{{asset('adminpage/sweetalert.min.js')}}"></script>
<script type="">
  @foreach ($pkh as $data)
    $('button#del{{$data->id}}').on('click', function(){
      swal({
        title: "Anda Yakin?",
        text: "Data yang terhapus tidak dapat dikembalikan!",
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Tidak",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ya",
        closeOnConfirm: false
      },
      function (){
        $("#form{{$data->id}}").submit();
      });
    })
    @endforeach
</script>

  @include('admin.layout.partial.data_table')

@endsection