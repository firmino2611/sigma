<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css') }}">

@extends('layouts.sistema')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Todos os produtos
      @if(Auth::user()->hasRole('integrador') or Auth::user()->hasRole('banco'))
          <button class="btn  btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Novo Produto </button>
      @endif
        <!-- <small>Optional description</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active"> Produtos</li>
    </ol>
  </section><br>

  <div class="box box-success">
    

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Produto</th>
            <th>Fornecedor</th>
            <th>Quantidade</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td> Produto X </td>
              <td> Fornecedor Y </td>
              <td> 23 und </td>
              <td>
                  <a href="{{ route('produtos.detalhes', 1) }}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-eye"></i> Visualizar</a>
              </td>
          </tr>

        </tbody>
        
      </table>
    </div>  
  </div>
<!-- /.box-body -->
@endsection

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo produto</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Produto</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Fornecedor</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Preço R$</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Quantidade</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- DataTables -->
<script src="{{ asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('public/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>