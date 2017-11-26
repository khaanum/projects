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
		                  <!-- general form elements -->
        		<div class="box box-primary">
					<div class="box-header with-border">
	        			<h3 class="box-title">Tambah file</h3>
					</div>
		            <!-- /.box-header -->
		            <!-- form start -->
		            @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

		            <form action="{{ route('admin.excel-post') }}" method="post" enctype="multipart/form-data" >
		            	{{ csrf_field() }}
		            	{{ method_field('POST') }}
		            	<div class="box-body">
			                <div class="form-group">
				                <label for="daerah">Nama Daerah</label>
				                <input name="daerah" type="text" class="form-control" id="daerah" placeholder="Nama Daerah">
			                </div>
			                <div class="form-group">
			                	<label for="file">File input</label>
			                	<input type="file" name="file" id="file">

			                	<p class="help-block">pilih file excel</p>
			                </div>
		              	</div>
			            <div class="box-footer">
			            	<button type="submit" class="btn btn-primary">Submit</button>
			            </div>
		            </form>
				</div>
		    </div>
		</div>
	</section>
@endsection