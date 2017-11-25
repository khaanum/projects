@extends('admin.layout.app')

@section('content')

<section class="content-header">
      <h4>
        Data Tables
        <small>advanced tables</small>
      </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
</section>


 <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a type="button" class="btn bg-navy margin" href="/admin/isdh4/create"><td>Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Fungsi Hutan</th>
                  <th rowspan="2">Target Klaster</th>
                  <th rowspan="2">Realisasi Klaster</th>
                  <th colspan="6">Enumerasi Redesign TSP/PSP</th>
                  <th rowspan="2" style="width: 70px">Action</th>
                </tr>
                <tr>
                  <th>a</th>
                  <th>s</th>
                  <th>d</th>
                  <th>g</th>
                  <th>h</th>
                  <th>k</th>
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
                          <a type="button" class="btn btn-success" href=""><i class="fa fa-edit"></i></a>
                          <!-- button edit -->
                          <!-- {{method_field('DELETE')}} -->
                          <button type="submit" class="btn btn-danger" href=""><i class="fa fa-trash"></i></button>
                          <input type="hidden" name="delete" value="delete"><!-- {{csrf_field()}} -->
                    </form>
                    </div>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Fungsi Hutan</th>
                  <th>Target Klaster</th>
                  <th>Realisasi Klaster</th>
                  <th>Enumerasi Redesign TSP/PSP</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>
</section>
@endsection