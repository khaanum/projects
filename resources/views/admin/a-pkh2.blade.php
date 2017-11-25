@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
      Data PKH2
      <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
    	<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/pkh"><i class="fa fa-dashboard"></i> PKH</a></li>
        <li class="active"><a href="/admin/pkh2">Tabel-2</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box box-success">
	            <div class="box-header">
	            	<i class="fa fa-table"></i>
	              <h3 class="box-title">Tabel Data PKH Bagian-2</h3>
	            </div>
            	<!-- /.box-header -->
            	<div class="box-body">
            		<a type="button" class="btn bg-navy margin" href="/admin/pkh2/create"><td>Tambah</a>
              		<table id="example1" class="table table-bordered table-striped">
		                <thead>
			                <tr class="headings">
			                	<tr>
				                  	<th rowspan="2">No</th>
				                  	<th rowspan="2">Kabupaten/ Kelompok Hutan</th>
				                  	<th rowspan="2">Fungsi</th>
				                  	<th rowspan="2">TA</th>
				                  	<th colspan="3">Panjang Batas(Km)</th>
				                  	<th rowspan="2">Luas(Ha)</th>
				                  	<th rowspan="2">Temu Gelang</th>
				                  	<th rowspan="2">Tanggal BA</th>
				                  	<th colspan="2">Surat Pengantar ke Pusat</th>
				                  	<th rowspan="2">Proses Pengukuhan Tata Batas</th>
				                  	<th rowspan="2">Action</th>
			                  	</tr>
			                  	<tr>
			                  		<th colspan="" rowspan="" headers="" scope="">Luar</th>
			                  		<th colspan="" rowspan="" headers="" scope="">Fungsi</th>
			                  		<th colspan="" rowspan="" headers="" scope="">Jumlah</th>
			                  		<th colspan="" rowspan="" headers="" scope="">No</th>
			                  		<th colspan="" rowspan="" headers="" scope="">Tanggal</th>
			                  	</tr>	
		                	</tr>
				        </thead>
		                <tbody>
							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
								<td>8</td>
								<td>9</td>
								<td>10</td>
								<td>11</td>
								<td>12</td>
								<td>12</td>
								<td>
								<div class="btn-group-center">
								<form method="" action="">
			                	<a type="button" class="btn btn-success" href="">Edit</a>
			                	
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