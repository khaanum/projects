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
@if (count($errors)>0)
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
<section class="content">
  <form method="POST" action="{{route('admin.a-sejarah'), $sejarah}}"> 
    {{ csrf_field() }} 
    {{ method_field('PATCH') }}
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-pencil"></i>
                Ubah Data
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

      @include('admin.ckeditor')
@endsection

