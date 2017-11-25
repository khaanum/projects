@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h1>
      Data PKH1
      <small>BPKH Wilayah III Pontianak</small>
    </h1>
    <ol class="breadcrumb">
    	<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
    	<li><a href="/admin/pkh"><i class="fa fa-dashboard"></i> PKH</a></li>
        <li class="active"><a href="/admin/pkh1">Tabel-1</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box box-success">
	            <div class="box-header">
	            	<i class="fa fa-table"></i>
	              <h3 class="box-title">Tabel Data PKH Bagian-1</h3>
	            </div>
            	<!-- /.box-header -->
            	<div class="box-body">
            		<a type="button" class="btn bg-navy margin" href="/admin/pkh1/create"><td>Tambah</a>
              		<table id="example1" class="table table-bordered table-striped table-condensed">
		                <thead>
			                	<tr>
			                		<th style="border : 1px solid black;" rowspan="2">No</th>
					                <th style="border : 1px solid black;" rowspan="2">Kawasan Hutan</th>
					                <th colspan="4">Luas Berdasarkan</th>
					                <th rowspan="2">Keterangan</th>
					                <th rowspan="2">Action</th>
			                	</tr>
			                	<tr>
			                		<th style="border : 1px solid black;">TGHK</th>
			                		<th style="border : 1px solid black;" colspan="" rowspan="" headers="" scope="">RTRWP</th>
			                		<th style="border : 1px solid black;" colspan="" rowspan="" headers="" scope="">Paduserasi</th>
			                		<th style="border : 1px solid black;" colspan="" rowspan="" headers="" scope="">Penunjukan</th>
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