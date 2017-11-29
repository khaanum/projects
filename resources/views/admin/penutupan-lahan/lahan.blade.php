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
						<!-- <a type="button" class="btn bg-navy margin" href="#">Import</a>
						<a type="button" class="btn bg-navy margin" href="#">Export</a> -->
						<form role="form" action="{{url('/admin/penutupan-lahan/import')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
                  				<input type="file" id="imported-file" name="imported-file">
								<p class="help-block">Pilih file excel</p>
                			</div>
                			<div class="box-footer">
                				<button type="submit" class="btn btn-success">Import</button>
                				<a class="btn btn-success" href="#">Export</a>
                			</div>
            			</form>
					</div>
				</div>
				<div class="box box-success">
					<div class="box-header">
						<i class="fa fa-table"></i>
						<h3 class="box-title">Data</h3>
					</div>
					<div class="box-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Kelas Penutupan Lahan</th>
									<th colspan="2">Luas Menurut Fungsi Kawasan</th>
									<th>feffdf</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection