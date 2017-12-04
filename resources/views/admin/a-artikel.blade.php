@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data Artikel & Komentar Artikel
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
    	<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/artikel"><i class="fa fa-newspaper-o"></i>Artikel</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box box-success">
            	<!-- /.box-header -->
            	<div class="box-body">
				<div class="box-header">
		            <h3 class="box-title"><i class="fa fa-newspaper-o"></i> Artikel</h3>
          		</div>
          		@if ($message = Session::get ('success'))
          			<div class="alert alert-success alert-dismissible">
          				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          				<p>{{ $message }}</p>
          			</div>
              @elseif($message = Session::get ('yups'))
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p>{{ $message }}</p>
                </div>
          		@endif

            		<a type="button" class="btn bg-navy margin" href="/admin/artikel/create"><td>Tambah Artikel</a>
              		<table id="example1" class="table table-bordered table-striped">
		                <thead>
			                <tr>
			                  <th>No</th>	
			                  <th style="width: 230px">Judul</th>
			                  <th style="width: 300px">Artikel</th>
			                  <th>Gambar</th>
			                  <th>Waktu</th>
			                  <th>Action</th>
		                	</tr>
				        </thead>
		                <tbody>
		                	@foreach($artikel as $data)
							<tr>
								<td class="text-center">{{ ++$i }}</td>
								<td>{{$data->title}}</td>
								<td>{!! str_limit($data->content, 70)!!}</td> 
								<td><img style="width:80px;height:80px;" src="../adminpage/img/{{$data->image}}" alt=""></td>
								<td>{{$data->created_at}}</td>
								<td>
									<div class="btn-group-center">
									<form id="form{{$data->id}}" method="POST" action="/admin/artikel/{{$data->id}}/delete">
				                	<a type="button" class="btn btn-success" href="/admin/artikel/{{$data->id}}/edit"><i class="fa fa-edit"></i></a>
				                	<!-- button edit -->
				                	{{method_field('DELETE')}}
				                	<button id="del{{$data->id}}" type="button" class="btn btn-danger" href="/admin/artikel/{{$data->id}}/delete"><i class="fa fa-trash"></i></button>
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

<script type="text/javascript" src="{{asset('adminpage/sweetalert.min.js')}}"></script>
<script type="">
  @foreach ($artikel as $data)
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