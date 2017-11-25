@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Tambah Artikel
      <small>BPKH Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="/admin/artikel"><i class="fa fa-newspaper-o"></i>Artikel</a></li>
            <li class="nonactive"><a href="/admin/artikel/create"><i class="fa fa-plus"></i> Artikel</a></li>
          </ol>
</section>

<!-- Main content -->
    <section class="content">
<form method="POST" action="{{route('admin.a-artikel.store')}}" enctype="multipart/form-data"> 
    {{ csrf_field() }} 
    {{ method_field('POST') }}

      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body pad">
              <input class="form-control input-lg" type="text" placeholder="Judul artikel" name="title">
              <br>
              <form>
                    <textarea id="editor1" name="content" rows="10" cols="80">                     
                    </textarea>
              </form>
              <br>
              <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" id="image" name="image">
              </div>
            </div>
            <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="save">
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </form>
    </section>


@endsection

<!-- <section class="content">
  <form method="POST" action="{{route('admin.a-artikel.store')}}"> 
    {{ csrf_field() }} 
    {{ method_field('POST') }}
    
        <div class="box box-success">
              <div class="box-header">
                <i class=" fa fa-pencil-square-o"></i>
                <h3 class="box-title">Tambah Artikel</h3>                            
              </div>
                
              <div class="box-body pad">
                <input class="form-control input-lg" type="text" placeholder="Title">
                <br>
                <form>
                    <textarea class="textarea" name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </form>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>

                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="Publish">
                </div>
        </div>
  </form>
</section> -->

