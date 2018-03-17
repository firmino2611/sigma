@extends('layouts.sistema')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
     <i class="fa fa-eye"></i> Detalhes do projeto
      <!-- <small>Optional description</small>-->
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active"> Novo post</li>
  </ol>
</section><br>


<div class="row">
  <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
        </div>
          <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.test') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="title" placeholder="Titulo do post">
                </div>

                <div class="form-group">
                  <label for="summernote">Conteudo</label>
                   <textarea id="summernote" class="summernote" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Imagem</label>
                    <input name="image" type="file" id="exampleInputFile">
                </div>

                <div class="form-group">
                  <label>Categoria</label>
                  <select name="category" class="form-control">
                    <option>Sem Categorias</option>
                  </select>
                </div>

                <h4>Detalhes de visualizacao</h4>
                <div class="checkbox">
                    <label>
                      <input name="active" type="checkbox"> Ativo
                    </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input name="star" type="checkbox"> Destaques
                  </label>
                </div>

                <button type="submit" class="btn btn-flat btn-primary">Publicar</button>
            </div>
        </form>
      </div><!-- ./ box-body -->
  </div><!-- ./ col-md-9 -->

  <div class="col-md-3">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Informacoes adicionais</h3>
          </div>
      </div><!-- ./ box box-primary -->
  </div>
</div>
  
@endsection

<!-- FastClick -->
<script src="{{ asset('public/plugins/fastclick/fastclick.js') }}"></script>