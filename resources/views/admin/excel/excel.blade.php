@extends('admin.layout.app')

@section('content')
	<section class="content-header">
	    <h4>
	      Excel
	      <small>BISDH Wilayah III Pontianak</small>
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
						<h3 class="box-title">File Excel</h3>
					</div>
					<div class="box-body">
						<a type="button" class="btn bg-navy margin" href="/admin/excel/create">Tambah File</a>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nama Daerah</th>
									<th>File</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($excel as $data)
								<tr>
									<td>{{$data->daerah}}</td>
									<td>{{$data->file}}</td>
									<td>
										<a class="btn btn-primary" href="/admin/excel/{{$data->id}}">Detail</a>
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