@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data Pegawai
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
    	<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="/admin/pegawai">Tata Usaha</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box box-success">
	            <div class="box-header">
	            	<i class="fa fa-table"></i>
	              <h3 class="box-title">Tabel Data Pegawai</h3>
	            </div>
            	<!-- /.box-header -->
            	<div class="box-body">
            		<a type="button" class="btn bg-navy margin" href="/admin/pegawai/create"><td>Tambah Data</a>
              		<table id="example1" class="table table-bordered table-striped">
		                <thead>
			                <tr>
			                  <th>No</th>	
			                  <th>Nama</th>
			                  <th>Nip</th>
			                  <th>Golongan</th>
			                  <th>Jabatan</th>
			                  <th>Action</th>
		                	</tr>
				        </thead>
		                <tbody>
		                	@foreach($pegawai as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->nama_pegawai}}</td>
								<td>{{$data->nip}}</td>
								<td>{{$data->gol}}</td>
								<td>{{$data->jabatan}}</td>
								<td>
								<div class="btn-group-center">
								<form method="POST" action="/admin/pegawai/{{$data->id}}/delete">
			                	<a type="button" class="btn btn-success" href="/admin/pegawai/{{$data->id}}/edit"><i class="fa fa-edit"></i></a>
			                	<!-- button edit -->
			                	{{method_field('DELETE')}}
			                	<button type="submit" class="btn btn-danger" href="/admin/pegawai/{{$data->id}}/delete"><i class="fa fa-trash"></i></button>
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