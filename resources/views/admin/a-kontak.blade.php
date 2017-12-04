@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data Kontak
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
    	<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/Kontak">Kontak</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box box-success">
	            <div class="box-header">
	            	<i class="fa fa-table"></i>
	              <h3 class="box-title">Kontak</h3>
	            </div>
            	<!-- /.box-header -->
            	<div class="box-body">
              		<table id="example1" class="table table-bordered table-striped">
		                <thead>
			                <tr>
			             	  <th>No</th>	
			                  <th>Nama</th>
			                  <th>Email</th>
			                  <th>No.Hp</th>
			                  <th>Pesan</th>
			                  <th>Action</th>
		                	</tr>
				        </thead>
		                <tbody>
		               	<?php $no = $kontak ?>
                    		@foreach($kontak as $data)
                      	<?php $no++ ?>
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>{{$data->phone_number}}</td>
								<td>{{$data->message}}</td>
								<td>
									<div class="btn-group-center">
										<form id="form{{$data->id}}" method="POST" action="/admin/kontak/{{$data->id}}/delete">
					                	{{method_field('DELETE')}}
					                	<button id="del{{$data->id}}" type="button" class="btn btn-danger" href="/admin/Kontak/{{$data->id}}/delete"><i class="fa fa-trash"></i></button>
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
  @foreach ($kontak as $data)
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