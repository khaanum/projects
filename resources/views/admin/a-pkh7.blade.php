@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data PKH-7
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
    	<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li><a href="/admin/pkh"><i class="fa fa-dashboard"></i> PKH</a></li>
        <li class="active"><a href="/admin/pkh4">Tabel-7</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box box-success">
	            <div class="box-header">
	            	<i class="fa fa-table"></i>
	              <h3 class="box-title">Tabel Data PKH Bagian-7</h3>
	            </div>
            	<!-- /.box-header -->
            	<div class="box-body">
            		<a type="button" class="btn bg-navy margin" href="/admin/pkh7/create"><td>Tambah</a>
              		<table id="example1" class="table table-bordered table-striped">
		                <thead>
			                	<tr>
			                		<th rowspan="2">No</th>
					                <th rowspan="2">Lokasi WPP/SKP</th>
					                <th rowspan="2">Luas WPP</th>
					                <th colspan="5">Tumpang Tindih Dengan Kawasan Hutan (Ha)</th>
					                <th rowspan="2">Keterangan</th>
					                <th rowspan="2">Action</th>
			                	</tr>
			                	<tr>
			                		<th colspan="" rowspan="" headers="" scope="">CA</th>
			                		<th colspan="" rowspan="" headers="" scope="">HL</th>
			                		<th colspan="" rowspan="" headers="" scope="">HPT</th>
			                		<th colspan="" rowspan="" headers="" scope="">HPB</th>
			                		<th colspan="" rowspan="" headers="" scope="">HPK</th>
			                	</tr>
				        </thead>
		                <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
								<div class="btn-group-center">
									<form>
				                	<a type="button" class="btn btn-success" href="">Edit</a>
				                	<!-- button edit -->
				                	<!-- {{method_field('DELETE')}} -->
				                	<button type="submit" class="btn btn-danger" href="">Delete</button>
				                	<input type="hidden" name="delete" value="delete"><!-- {{csrf_field()}} -->
				                 	</form>
			                    </div>
                  				</td>
							</tr>
							
		                </tbody>
              		</table>
            	</div>
    		</div>
    	</div>
	</div>
</section>
@endsection