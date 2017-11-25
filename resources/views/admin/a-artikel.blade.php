@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data Artikel
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
	            <div class="box-header">
	            	<i class="fa fa-table"></i>
	              <h3 class="box-title">Artikel</h3>
	            </div>
            	<!-- /.box-header -->
            	<div class="box-body">
            		<a type="button" class="btn bg-navy margin" href="/admin/artikel/create"><td>Tambah Artikel</a>
              		<table id="example1" class="table table-bordered table-striped">
		                <thead>
			                <tr>
			                  <th>No</th>	
			                  <th>Judul</th>
			                  <th>Artikel</th>
			                  <th>Gambar</th>
			                  <th>Waktu</th>
			                  <th>Action</th>
		                	</tr>
				        </thead>
		                <tbody>
		                	@foreach($artikel as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->title}}</td>
								<td>{!!$data->content!!}</td> 
								<td><img style="width:80px;height:80px;" src="../adminpage/img/{{$data->image}}" alt=""></td>
								<td>{{$data->created_at}}</td>
								<td>
								<div class="btn-group-center">
								<form method="POST" action="/admin/artikel/{{$data->id}}/delete">
			                	<a type="button" class="btn btn-success" href="/admin/artikel/{{$data->id}}/edit"><i class="fa fa-edit"></i></a>
			                	<!-- button edit -->
			                	{{method_field('DELETE')}}
			                	<button type="submit" class="btn btn-danger" href="/admin/artikel/{{$data->id}}/delete"><i class="fa fa-trash"></i></button>
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