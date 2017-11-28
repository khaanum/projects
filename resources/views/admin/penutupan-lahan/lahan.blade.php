@extends('admin.layout.app')

@section('content')
	<section class="content-header">
	    <h4>
	      Keadaan Luas Penutupan Lahan
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
						<h3 class="box-title">Import/Export</h3>
					</div>
					<div class="box-body">
						<a type="button" class="btn bg-navy margin" href="#">Import</a>
						<a type="button" class="btn bg-navy margin" href="#">Export</a>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection