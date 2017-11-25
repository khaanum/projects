@extends('admin.layout.app')

@section('content')

<section class="content-header">
    <h4>
        Ubah tuspoksi
        <small>BPKH Wilayah III Pontianak</small>
    </h4>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
        <li><a href="/admin/tuspoksi">tuspoksi</a></li>
        <li class="nonactive"><a href="/admin/tuspoksi/{id}/edit">Edit</a></li>
    </ol>
</section>

<section class="content">
  <form method="POST" action="{{route('admin.a-tuspoksi'), $tuspoksi}}"> 
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
                    {{ $tuspoksi->content }}                 
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


@endsection

