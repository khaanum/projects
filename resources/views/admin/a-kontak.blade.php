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
			                  <th>Nama</th>
			                  <th>Email</th>
			                  <th>No.Hp</th>
			                  <th>Pesan</th>
			                  <th>Action</th>
		                	</tr>
				        </thead>
		                <tbody>
		                	@foreach($kontak as $data)
							<tr>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>{{$data->phone_number}}</td>
								<td>{{$data->message}}</td>

								<td>
								<div class="btn-group-center">
								<form method="POST" action="/admin/Kontak/{{$data->id}}/delete">
			                	<a type="button" class="btn btn-success" href="/admin/Kontak/{{$data->id}}/edit">Edit</a>
			                	<!-- button edit -->
			                	{{method_field('DELETE')}}
			                	<button type="submit" class="btn btn-danger" href="/admin/Kontak/{{$data->id}}/delete">Delete</button>
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