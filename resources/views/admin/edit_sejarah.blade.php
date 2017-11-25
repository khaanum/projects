@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
        Ubah Sejarah
        <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
        <li><a href="/admin/sejarah">Sejarah</a></li>
        <li class="nonactive"><a href="/admin/sejarah/{id}/edit">Edit</a></li>
    </ol>
</section>

<section class="content">
  <form method="POST" action="{{route('admin.a-sejarah'), $sejarah}}"> 
    {{ csrf_field() }} 
    {{ method_field('PATCH') }}
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="content" rows="10" cols="80">
                    {{ $sejarah->content }}                 
                    </textarea>
              </form>
            </div>
            <div class="box-footer">
                <input type="submit" class="btn btn-info" value="update">
              </div>
          </div>
          </div>
        </div>
      </section>

<!-- <section class="content">
  <form method="POST" action="{{route('admin.a-sejarah'), $sejarah}}"> 
    {{ csrf_field() }} 
    {{ method_field('PATCH') }}
    <div class="form-group">
        <div class="box box-success">
              <div class="box-header">
                <i class=" fa fa-text-width"></i>
                <h3 class="box-title">Edit Sejarah</h3>
              </div>
              <div class="box-body pad">
                <form>
                    <textarea class="textarea" name="content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $sejarah->content }}</textarea>
                </form>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                  </div>
              </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="save">
              </div>
            </div>
    </div>
  </form>
</section> -->
@endsection

